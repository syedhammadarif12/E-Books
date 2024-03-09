<?php
include "conn.php";
$id = $_GET['id'];

$query = "DELETE FROM `dealer` WHERE u_id = $id";
$run = mysqli_query($conn , $query);
if($run){
    echo "
    <script>    
    alert('Dealer Deleted');
    window.location.href='dealer.php';
    </script>
    
    ";

}