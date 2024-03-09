<?php
include "conn.php";
$id = $_GET['id'];

$query = "DELETE FROM book_category WHERE category_id = $id";
$run = mysqli_query($conn , $query);
if($run){
    echo "
    <script>    
    alert('Category Deleted');
    window.location.href='dashboard.php';
    </script>
    
    ";
}
?>