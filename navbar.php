<?php

include 'conn.php';
include 'customersession.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="images/LOGO2.png" rel="shortcut icon" type="image/png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <style>
    <?php
    include "style.css";
    ?>
  </style>
  <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>
  <script>

    $(document).ready(function () {

      $("#my").on("keyup", function () {

        var value = $(this).val().toLowerCase();

        $(".search").filter(function () {

          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

        });
      });
    });

  </script>
</head>

<body>



  <!-- Navbar Start -->





  <nav class="nav1 navbar navbar-expand-sm navbar-light bg-white sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand d-none d-sm-block fw-bolder" href="index.php"><img src="images/LOGO2.png" width="53"
          height="32">EBOOK</a>




      <div class="container-fluid d-flex">

        <a class="navbar-brand d-sm-none" href="index.php"><img src="images/LOGO2.png" width="37"></a>

        <form class="d-flex mx-auto w-75 justify-content-center">
          <input class="form-control focus-ring focus-ring-light rounded-0 d-none d-sm-block" type="search" id="my"
            placeholder="Search" aria-label="Search">
          <a class="btn btn-outline-info rounded-0 d-none d-sm-block" type="submit"><i class="fas fa-search"></i></a>
        </form>

        <li class="nav-item ms-auto mt-1 d-sm-none">
          <a href="cart.php" class="bx bx-shopping-bag fs-1 text-dark"></a>
        </li>

        <?php

        if (isset($_SESSION['customerid'])) {
          ?>

          <a href='dealer/dealersignup.php'
            class='btn btn-dealer m-1 btn-sm border-0 text-white rounded-0 ms-3 d-sm-none'>Dealer</a>

          <a href="#" class="ms-3 d-sm-none" data-bs-toggle="dropdown">
            <img class="rounded-circle" src="<?php echo "images/" . $rows['c_img'] ?>" width="35" height="35">
          </a>


          <?php
        } else {
          echo " <a href='customersignup.php' class='btn btn-customer m-1 btn-sm border-0 text-white rounded-0 ms-2 d-sm-none'>Customer</a>
                 <a href='dealer/dealersignup.php' class='btn btn-dealer m-1 btn-sm border-0 text-white rounded-0 ms-2 d-sm-none'>Dealer</a>";
        }



        ?>

        <ul class="dd2 dropdown-menu dropdown-menu-end rounded-0">
          <center>
            <h6 class="mt-2 text-center text-dark fw-bold">
              <?php echo $email; ?>
            </h6>

            <img class="rounded-circle mt-1" src="<?php echo "images/" . $rows['c_img'] ?>" width="100">

            <h5 class="text-center text-dark mt-1 fw-bolder"> Hi,
              <?php echo $user; ?>!
            </h5>
          </center>
          <hr>
          <li><a class="dropdown-item orders p-2" href="orders.php"><i class="fa fa-shopping-basket ms-2 me-3"></i>
              Orders</a></li>
          <li><a class="dropdown-item setting p-2" href="customerprofileedit.php?id=<?php echo $rows['c_id'] ?>"><i
                class="fas fa-cog ms-2 me-3"></i> Setting</a></li>
          <li><a class="dropdown-item logout p-2" href="customerlogout.php"><i class="fas fa-power-off ms-2 me-3"></i>
              Logout</a></li>


        </ul>


      </div>







      <ul class="navbar-nav ms-auto">

        <li class="nav-item me-1 mt-2 d-none d-sm-block">
          <a href="cart.php" class="bx bx-shopping-bag fs-2 text-dark"></a>
          <!-- <span class='cart-counter'>1</span> -->
        </li>




        <?php

        if (isset($_SESSION['customerid'])) {
          ?>

          <a href='dealer/dealersignup.php'
            class='btn btn-dealer m-1 border-0 text-white rounded-0 ms-3 d-none d-sm-block'>Dealer</a>


          <a href="#" class="ms-3 mt-2 d-none d-sm-block" aria-expanded="false" data-bs-toggle="dropdown">
            <img class="rounded-circle" src="<?php echo "images/" . $rows['c_img'] ?>" width="35" height="35">
          </a>

          <h6 class="mt-3 ms-1 text-dark d-none d-sm-block">
            <?php echo $user; ?>
          </h6>


          <?php
        } else {
          echo " <a href='customersignup.php' class='btn btn-customer border-0 text-white rounded-0 ms-2  d-none d-sm-block'>Customer</a>
                 <a href='dealer/dealersignup.php' class='btn btn-dealer border-0 text-white rounded-0 ms-2  d-none d-sm-block'>Dealer</a>";
        }



        ?>


        <ul class="dd1 dropdown-menu dropdown-menu-end rounded-0">
          <center>
            <h6 class="mt-2 text-center text-dark fw-bold">
              <?php echo $email; ?>
            </h6>

            <img class="rounded-circle mt-1" src="<?php echo "images/" . $rows['c_img'] ?>" width="100">

            <h5 class="text-center text-dark mt-1 fw-bolder"> Hi,
              <?php echo $user; ?>!
            </h5>
          </center>
          <hr>
          <li><a class="dropdown-item orders p-2" href="orders.php"><i class="fa fa-shopping-basket ms-2 me-3"></i>
              Orders</a></li>
          <li><a class="dropdown-item setting p-2" href="customerprofileedit.php?id=<?php echo $rows['c_id'] ?>"><i
                class="fas fa-cog ms-2 me-3"></i> Setting</a></li>
          <li><a class="dropdown-item logout p-2" href="customerlogout.php"><i class="fas fa-power-off ms-2 me-3"></i>
              Logout</a></li>


        </ul>

      </ul>

      <ul class="mx-auto d-sm-none w-100 navbar-nav justify-content-center mt-2">
        <form class="d-flex">
          <input class="form-control focus-ring focus-ring-light rounded-0 d-sm-none" type="search" placeholder="Search"
            aria-label="Search">
          <a class="btn btn-outline-info rounded-0 d-sm-none" type="submit"><i class="fas fa-search"></i></a>
        </form>
      </ul>


    </div>
  </nav>

  <nav class="nav2 navbar navbar-expand navbar-light bg-white">

    <ul class="navbar-nav ms-auto text-center menu-wrapper">
      <li class="nav-item menu-item">
        <a class="nav-link" href="index.php">Home</a>

        <a class="nav-link" href="about.php">About</a>

        <a class="nav-link" href="contact.php">Contact</a>

        <a class="nav-link" href="competition.php">Competition</a>

        <a class="nav-link" href="index.php#winners">Winners</a>

        <a class="nav-link" href="index.php#subscription">Our Subscriptions</a>


      </li>
    </ul>

  
     
    <li class="nav-item dropdown me-auto ps-3">
      <a class="nav-link text-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Book Categories
      </a>

        <ul class="dropdown-menu rounded-0 mt-2" aria-labelledby="navbarDropdown">
        <?php
      $query = "SELECT * FROM book_category";
      $run = mysqli_query($conn, $query);

      if (mysqli_num_rows($run)) {
        while ($row = mysqli_fetch_array($run)) {
          ?>
          <li><a class="dropdown-item" href="index.php#<?php echo $row['category_name'] ?>.php"><?php echo $row['category_name'] ?></a></li> 
          <?php
        }
      }
      ?>
        </ul>
    
    </li>
  </nav>


  <!-- Back to top Start -->






  <button type="button" class="btn-floating btn-lg" id="btn-back-to-top">
    <i class="fa fa-arrow-up"></i>
  </button>





  <!-- Back to top End -->


  <!-- Navbar End -->
  <!-- <div class="loader" ></div> -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="script.js"></script>