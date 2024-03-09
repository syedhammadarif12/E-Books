<?php 

include 'conn.php';

session_start();

if(isset($_SESSION['customerid'])){

    $id = $_SESSION['customerid'];
    $query = "SELECT * FROM customer WHERE c_id = $id";
    $runn = mysqli_query($conn , $query);
    $rows = mysqli_fetch_array($runn);

    $user = $rows['c_name'];
    $email = $rows['c_email'];
    // echo  $username;
}
else
// header('location:index.php');
// $admins = "";


?>