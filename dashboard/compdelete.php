<?php
include "conn.php";
$id = $_GET['id'];

$query = "DELETE FROM competition_list WHERE comp_id = $id";
$run = mysqli_query($conn , $query);
if($run){
    echo "
    <script>    
    alert('Competition Deleted');
    window.location.href='complist.php';
    </script>
    
    ";
}