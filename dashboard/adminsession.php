<?php 

include 'conn.php';
session_start();

if(isset($_SESSION['adminid'])){

    $id = $_SESSION['adminid'];
    $query = "SELECT * FROM admins WHERE a_id = $id";
    $runn = mysqli_query($conn , $query);
    $rows = mysqli_fetch_array($runn);

    $user = $rows['a_name'];
    // echo  $username;
}
else
header('location:adminlogin.php');


?>