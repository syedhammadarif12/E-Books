
<?php
include 'conn.php';
include 'customersession.php';
// session_start(); 

// CUSTOMER CHECKOUT WORK START
if (isset($_POST['checkout'])) {

    if ($_SESSION['customerid']) {

        $customerId = $_SESSION['customerid'];

        $name = $_POST['cname'];
        // $email = $_POST['cemail'];
        $contact = $_POST['ccontact'];
        $address = $_POST['caddress'];
        $order_date = $_POST['orderdate']; 
        $pcategory = $_POST['p_category']; 

      
        $query = "INSERT INTO `order_manager` (customer_id, name, address, contact, order_date, status) 
                  VALUES ('$id', '$name', '$address', '$contact', '$order_date', 'Pending')";
        $runn = mysqli_query($conn, $query);

        if ($runn) {
            $order_id = mysqli_insert_id($conn);

       
            $query2 = "INSERT INTO order_details (o_id, book_id, p_category, quantity, price)  
                       VALUES (?, ?, ?, ?, ?)";
            $data = mysqli_prepare($conn, $query2);

            if ($data) {
              
                mysqli_stmt_bind_param($data, "iiiii", $order_id, $book_id, $pcategory, $quantity, $price);

                $p_category = $pcategory;
                foreach ($_SESSION['cart'] as $key => $value) {
                   
                    $book_id = $value['booka_id'];
                    $quantity = $value['b_quantity'];
                    $price = $value['b_price'];

                    mysqli_stmt_execute($data);
                }

               
                unset($_SESSION['cart']);
                echo "
                <script>
                alert('Order has been received!');
                window.location.href='cart.php';
                </script>
                ";
            }
        }
    }
}
// CUSTOMER CHECKOUT WORK END

// DEALER CHECKOUT WORK START
// DEALER CHECKOUT WORK END


?>