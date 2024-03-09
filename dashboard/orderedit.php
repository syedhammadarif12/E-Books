<?php
 include 'conn.php';
 if(isset($_GET['id'])){

 
 $id = $_GET['id'];
 
//  $query = "SELECT * FROM order_manager WHERE m_id = $id"; 
//  $runn = mysqli_query($conn , $query);
//  $rows =  mysqli_fetch_array($runn);
 
 

//  if(isset($_POST['submit'])){
//     $name = $_POST['status'];

    
 
 $query2 = "UPDATE order_manager SET status ='Approved' WHERE m_id =  $id";
 
 $runnn =  mysqli_query($conn , $query2);
 
 if($runnn){
     echo "
     <script>
         alert('order approved!');
         window.location.href='orders.php';
     </script>
     
     
     ";
 }
 }
//  }
    ?>

