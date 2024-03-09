<?php
include 'conn.php';

$id =  $_GET['id'];


$query = "DELETE FROM `book_detail` WHERE  b_id = $id";
$runn =  mysqli_query($conn , $query);
if($runn){

    echo "
    
    <script>
    alert('Detail deleted!');
    window.location.href='book.php';

    </script>
    
    
    ";
}


?>