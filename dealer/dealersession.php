<?php 

include 'conn.php';
session_start();

if(isset($_SESSION['userid'])){

    $id = $_SESSION['userid'];
    $query = "SELECT * FROM dealer WHERE u_id = $id";
    $runn = mysqli_query($conn , $query);
    $rows = mysqli_fetch_array($runn);

    $user = $rows['u_name'];
    $email = $rows['u_email'];
    // echo  $username;
}
else
    $admins = "";
?>