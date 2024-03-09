<?php
include "conn.php";
// include 'customersession.php';
include 'navbar.php';
?>


  <title>Customer Orders</title>


      <br><br>
      <section>
        <h1 class="text-center fw-bold" style="color: rgb(73, 57, 113);" 7>Customer Orders</h1>
        <div class="container mt-5">
          <!-- Data display In table -->
          <!-- <div class="table-responsive"> -->
          <table class="table table-light table-bordered  mt-1 text-center align-middle" style="box-shadow: 0 0 11px rgba(0 , 0 , 0 , 0.3);">
            <thead>
              <tr>
                <!-- <th>Order ID</th> -->
                <th>ID</th>
                <th>Buyer</th>
                <th>Customer ID</th>
                <th>Buyer Address</th>
                <th>Buyer Contact</th>
                <th>Order Date</th>
                <!-- <th>Deler Id</th> -->


                <!-- <th>Book ID</th> -->
                <th>Book</th>
                <th>Publishing</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>


              </tr>
            </thead>

            <tbody>
                        <?php
                            $query = "SELECT order_manager.* , order_details.* , book_detail.b_name , customer.c_email , publishing_category.p_name  from order_manager INNER JOIN order_details ON order_manager.m_id = order_details.o_id INNER JOIN book_detail ON order_details.book_id = book_detail.b_id INNER JOIN customer ON order_manager.customer_id = customer.c_id INNER JOIN publishing_category ON order_details.p_category = publishing_category.p_id";

                            $run = mysqli_query($conn ,$query);
                            
                            if(mysqli_num_rows($run)){
                                while($row = mysqli_fetch_array($run)){
                        ?>   
                        <tr>
                            <td class="col-0"><?php echo $row['m_id']?></td>
                          
                            <td class="col-0"><?php echo $row['name']?></td>
                            <td class="col-0"><?php echo $row['c_email']?></td>

                            <td class="col-3"><?php echo $row['address']?></td>
                            <td class="col-2"><?php echo $row['contact']?></td>
                            <td class="col-4"><?php echo $row['order_date']?></td>
                        
                            <td class="col-4"><?php echo $row['b_name']?></td>
                            <td class="col-1"><?php echo $row['p_name']?></td>

                            <td class="col-1"><?php echo $row['quantity']?></td>
                            <td class="col-1"><?php echo $row['price']?></td>
                            <td class="col-0"><?php echo $row['status']?></td>
                      
                        </tr>                                 
                        <?php
                                }
                            }
                        ?>
                    </tbody>
          </table>
          <!-- </div> -->
          <!-- Data display In table End -->
        </div>
        </div>
      </section>


    </header>
  </main>
  <!-- header end -->

  <br><br><br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



  <?php 
  
  include 'footer.php';
  
  ?>