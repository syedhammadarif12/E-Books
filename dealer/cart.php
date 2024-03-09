<?php
include 'navbar.php';
?>
<title>Cart</title>
<style>
    .right {
        background-color: rgb(73, 57, 113);

    }

    .table {
        margin-top: 20px;

    }

    .warpper {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        width: 100%;
        grid-gap: 30px;
        gap: 30px
    }

    @media(max-width: 767px) {
        .card {
            width: 50%;

        }

        .row {
            width: 50%;

        }

        .card-body {
            width: 50%;
        }
    }



    @media(max-width: 580px) {
        .card {
            width: 100%;
        }

        .row {
            width: 100%;

        }

        .card-body {
            width: 100%;
        }
    }


    @media(max-width: 731px) {
        .card {
            width: 100%;
        }

        .row {
            width: 100%;

        }

        .card-body {
            width: 100%;
        }
    }
</style>





<div class="container-fluid py-5 h-100 " style="margin-top: 10px; ">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card rounded-0">
                <div class="card-body ">

                    <div class="row">
                        <a href="index.php"><i class="fas fa-home " style="color: rgb(73, 57, 113); "></i></a>
                        <div class="col-lg-7   " style="box-shadow: 0 0 13px rgba(0, 0, 0, .3) ;">
                            <h1 class="text-center fs-1 fw-bold fst-italic" style="color:rgb(73, 57, 113) ;">View
                                Cart</h1>

                            <table class=" col-lg-7 col-md-2 col-4 align-middle  table  mt-2 text-center "
                                style="box-shadow: 8px 5px 4px gray;">
                                <tr class="ss" style="font-weight: bold; ">
                                    <th class="text-white" style="background-color:rgb(73, 57, 113) ;">SNo</th>
                                    <th class="text-white" style="background-color:rgb(73, 57, 113) ;">Image</th>
                                    <th class="text-white" style="background-color:rgb(73, 57, 113) ;">Name
                                    </th>

                                    <th class="text-white" style="background-color:rgb(73, 57, 113) ;">Price
                                    </th>
                                    <th class="text-white" style="background-color:rgb(73, 57, 113) ;">Quantity
                                    </th>
                                    <th class="text-white" style="background-color:rgb(73, 57, 113) ;">Total
                                    </th>
                                    <th class="text-white" style="background-color:rgb(73, 57, 113) ;">Action
                                    </th>

                                </tr>
                                <tbody class="id bg-white   fw-bold fst-italic"
                                    style="font-weight: bold; color:rgb(73, 57, 113) ; ">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                            $sr = $key + 1;

                                            echo "
                                            <tr>
                                            <td>$sr</td>
                                            <td><img src='images/$value[thumbnail_img]' width='60' height='70'></td>
                                            <td>$value[b_name]</td>
                                            <td>$value[b_price]</td>
                                            <td>
                                            <form action='addtocart.php' method='POST'>
                                            
                            
                                               <input type='number' class='bquantity text-center' name='bQuantity' min='1'  value='$value[b_quantity]' onchange='this.form.submit' style='width: 70px;'>
                                        
                                            <input type='hidden' name='bName' value='$value[b_name]'>
                                            <input type='hidden' class='bprice' value='$value[b_price]'>
                                            </form>
                                            </td>
                                            <td class='total'></td>                            
                                            <td>
                                            <form action='addtocart.php' method='POST'>
                                            <input type='hidden' name='b_name' value='$value[b_name]'>
                                            <input class='btn btn-outline-danger rounded-0' type='submit' name='removebtn' value='Remove'>
                                            </form>
                                            </td>        
                                            </tr>
                            ";
                                        }
                                    }
                                    ?>

                                    <div class="col-4">
                                        <table class="table" style="background: rgb(73,57,113);
background: linear-gradient(0deg, rgba(73,57,113,0.8603816526610644) 0%, rgba(73,57,112,1) 35%);">
                                            <thead>
                                                <tr>
                                                    <th class="col-2 fw-bolder text-center text-white fs-5">GrandTotal
                                                    </th>
                                                    <th class="col-8 text-white text-center fw-bolder fs-5"
                                                        id="grandtotal"></th>

                                                </tr>
                                            </thead>
                                        </table>
                            </table>



                        </div>


                        </tbody>

                        <!-- <div class="col-4">
                <table class="table">
                <thead>
                <tr>
                        <th class="col-2 text-warning fw-bolder bg-black fs-5">GrandTotal</th>
                        <th class="col-8 text-black bg-warning fw-bolder fs-5" id="grandtotal"></th>

                    </tr>
                </thead>
            </table> -->



                        <!-- <input type='number' class='bquantity text-center' name='bQuantity' value='$value[b_quantity]' onchange='this.form.submit' style='width: 70px;'> -->

                        <div class=" right col-lg-7 m-4 ms-5  "
                            style="border-radius: 5px; width: 400px;  box-shadow: 0 0 13px rgba(0, 0, 0, .3) ;">

                            <h1 class="fw-bold text-white text-center mt-2 fs-2">CHECKOUT</h1>

                            <form class=" form m-auto text-light " action="checkout.php" method="POST">
                                <div class="warpper col-3" >
                                    <div class="box">

                                        <input class="form-control  fw-bold text-white "
                                            style="background: transparent; box-shadow:none;" type="text" name="cname"
                                            placeholder="NAME..." required>
                                    </div>
                                    <div class="box">

                                        <input class="form-control  fw-bold text-white "
                                            style="background: transparent; box-shadow:none; " type="number"
                                            name="ccontact" placeholder="CONTACT..." required>
                                    </div>

                                    <input class="form-control  fw-bold text-white "
                                        style="background: transparent; box-shadow:none; " type="text" name="caddress"
                                        placeholder="ADDRESS..." required>
                                </div>
                                <br>
                                <div class="box">

                                    <input class="form-control  fw-bold text-white "
                                        style="background: transparent; box-shadow:none; " type="date" name="orderdate"
                                        required>
                                </div>
                                <div class="box ">
                                    <select class="form-control  mt-3 py-1  text-white  fw-bold text-center "
                                        style="margin-left: 110px; width:150px; background: transparent; box-shadow:none;"
                                        name="p_category">
                                        <!-- <option class="text-dark" value="">PDF</option>
                                        <option class="text-dark" value="">CD</option>
                                        <option class="text-dark" value="">HARDCOPY</option> -->
                                            <?php
                                            $sqlquery = "SELECT * FROM publishing_category";
                                            $run = mysqli_query($conn, $sqlquery);

                                            if (mysqli_num_rows($run)) {
                                                while ($row = mysqli_fetch_array($run)) {
                                                    ?>
                                                    <option class="text-dark" value="<?php echo $row['p_id'] ?>">
                                                        <?php echo $row['p_name'] ?>
                                                    </option>
                                                <?php
                                                }
                                            }
                                            ?>
                                </div>
                                </select>
                                <div class="box text-center">
                                    <input class="btn  btn-outline-light fw-bold  mb-2  mt-3" type="submit"
                                    name="checkout" value="Checkout">
    
                                </div>
                                
                        </div>


                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
</div>
</div>
</section>
<script>


    var quantity = document.getElementsByClassName('bquantity');
    var price = document.getElementsByClassName('bprice');
    var total = document.getElementsByClassName('total');
    var grandtotal = document.getElementById('grandtotal');

    function pricing() {
        var gt = 0;
        for (var i = 0; i < quantity.length; i++) {
            total[i].innerText = (price[i].value) * (quantity[i].value);

            gt = gt + (price[i].value) * (quantity[i].value);
        }
        grandtotal.innerHTML = gt;
    }

    pricing();

</script>

<?php
include 'footer.php';
?>