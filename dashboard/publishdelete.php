<?php
include "conn.php";
$id = $_GET['id'];

$query = "DELETE FROM `publishing_category` WHERE p_id = $id";
$run = mysqli_query($conn , $query);
if($run){
    echo "
    <script>    
    alert('Publisher Deleted');
    window.location.href='publishbk.php';
    </script>
    
    ";
}