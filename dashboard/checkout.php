<?php

session_start();

include 'conn.php';
// include 'customersession.php';

// include 'websigninsession';

if (isset($_POST['checkout'])) {

    if($_SESSION['customerid']){

    $id = $_SESSION['customerid'];    

    $name = $_POST['cname'];
    $contact = $_POST['ccontact'];
    $address = $_POST['caddress'];
    $order_date = $_POST['orderdate'];


    $query = "INSERT INTO order_manager (customer_id , name , address , contact , order_date , status)
     VALUES ($id , '$name' , '$address' , '$contact' , '$order_date' , 'status')";
    $runn = mysqli_query($conn, $query);

    if ($runn) {

        $order_id = mysqli_insert_id($conn);

        $query2 = "INSERT INTO order_detail (o_id , book_id , p_category , quantity , price) VALUES ( ? , ? , ? , ? , ?)";

        $data = mysqli_prepare($conn , $query2);

        if($data){

            mysqli_stmt_bind_param($data , "iiiii" , $order_id , $book_id , $p_category , $bquantity , $bprice);

            foreach($_SESSION['cart'] as $key => $value){
                $bquantity = $value['quantity'];
                $bprice = $value['price'];
                mysqli_stmt_execute($data);

                unset($_SESSION['cart']);
                echo "
                <script>
                alert('Order has been received!');
                window.location.href='index.php';
                </script>
                ";
            }
        }
    }

}
}
?>