<?php 

include 'conn.php';
include 'customersession.php';
// session_destroy();


if(isset($_POST['submit'])){

    $name = $_POST['b_name'];
    $quantity = $_POST['b_quantity'];
    $price = $_POST['b_price'];
    $image = $_POST['thumbnail_img'];
    $books_id = $_POST['booka_id'];

    if(isset($_SESSION['cart'])){

        $itemname = array_column($_SESSION['cart'] , 'b_name');
        if(in_array($name , $itemname)){

            echo "
            
            <script>
            alert('item already exists');
            window.location.href='cart.php';
            </script>
            ";
        }
     else{
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('b_name' => $name , 'b_quantity' => $quantity , 'b_price' => $price , 'thumbnail_img' => $image , 'booka_id' => $books_id);
        header('location:cart.php'); 
    }
    }
    else{
        $_SESSION['cart'][0] = array('b_name' => $name , 'b_quantity' => $quantity , 'b_price' => $price , 'thumbnail_img' => $image , 'booka_id' => $books_id);
        header('location:cart.php');
    }

    print_r($_SESSION['cart']);

    echo "<br>";

    echo count($_SESSION['cart']);
    
}

if(isset($_POST['removebtn'])){

    $productName = $_POST['b_name'];
    foreach($_SESSION['cart'] as $key => $value){

        if($value['b_name'] == $productName){

            unset($_SESSION['cart'][$key]);

            $_SESSION['cart'] = array_values($_SESSION['cart']);
            
            echo "
            <script>
            alert('Product Removed');
            window.location.href='cart.php';
            </script>
            ";

        }
    }
}



if(isset($_POST['bQuantity'])){

    $name = $_POST['bName'];

    foreach($_SESSION['cart'] as $key => $value){

        if($value['b_name'] == $name){

            $_SESSION['cart'][$key]['b_quantity'] = $_POST['bQuantity'];

            echo "
            <script>
            alert('Quantity Updated');
            window.location.href='cart.php';
            </script>
            ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
</head>
<body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center><a class="btn btn-info rounded-0 fw-bolder fs-5" href="cart.php">View Cart</a></center>
</body>
</html>
