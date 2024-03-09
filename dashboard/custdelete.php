<?php
include "conn.php";
$id = $_GET['id'];

$query = "DELETE FROM `customer` WHERE c_id = $id";
$run = mysqli_query($conn , $query);
if($run){
    echo "
    <script>    
    alert('Customer Deleted');
    window.location.href='customer.php';
    </script>
    
    ";
}