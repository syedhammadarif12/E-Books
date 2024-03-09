<?php
    include "conn.php";
    include "navbar.php";
    ?>


<title>Dealer Order</title>


<br><br>  
<section>
          <h1 class="text-center fw-bold" style="color: rgb(73, 57, 113);"7>Dealer Orders</h1>
        <div class="container mt-5">
            <!-- Data display In table -->
          <!-- <div class="table-responsive"> -->
                <table class="table table-light table-bordered  mt-1 text-center align-middle" style="box-shadow: 0 0 11px rgba(0 , 0 , 0 , 0.3);">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Buyer</th>
                            <th>Dealer ID</th>
                            
                            <th>Buyer Address</th>
                            <th>Buyer Contact</th>
                            <th>Order Date</th>
                            
                           
                           
                            <th>Book</th>
                            <th>Publishing</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Status</th>


                        </tr>
                    </thead>
                    <tbody>
                    <?php
                         $query = "SELECT order_manager.* , order_details.* , book_detail.b_name , dealer.u_email , publishing_category.p_name  from order_manager INNER JOIN order_details ON order_manager.m_id = order_details.o_id INNER JOIN book_detail ON order_details.book_id = book_detail.b_id INNER JOIN dealer ON order_manager.dealer_id = dealer.u_id INNER JOIN publishing_category ON order_details.p_category = publishing_category.p_id";
                        $runn = mysqli_query($conn, $query);
                        if (mysqli_num_rows($runn)) {
          
                          while ($rows = mysqli_fetch_array($runn)) {
          
                            ?>
                            <tr>
                              <td class="col-0">
                                <?php echo $rows['m_id'] ?>
                              </td>
                              <td class="col-0">
                                <?php echo $rows['name'] ?>
                              </td>
                              <td class="col-0">
                                <?php echo $rows['u_email'] ?>
                              </td>
                              <td class="col-3">
                                <?php echo $rows['address'] ?>
                              </td>
                              <td class="col-2">
                                <?php echo $rows['contact'] ?>
                              </td>
                              <td class="col-4">
                                <?php echo $rows['order_date'] ?>
                              </td>
                              <td class="col-4">
                                <?php echo $rows['b_name'] ?>
                              </td>
                              <td class="col-1">
                                <?php echo $rows['p_name'] ?>
                              </td>
                              <td class="col-1">
                                <?php echo $rows['quantity']?>
                              </td>
                              <td class="col-1">
                                <?php echo $rows['price']?>
                              </td>
                              <td class="col-0">
                                <?php echo $rows['status']?>
                              </td>
                                
          
                             
          
                
          
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
    <br><br><br><br>

<!-- header end -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



<?php 

include 'footer.php';

?>