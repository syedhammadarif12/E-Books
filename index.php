<?php

include 'navbar.php';

?>

<head>
    <style>
        <?php
        include 'laiba.css';
        ?>
    </style>

</head>

<body>




    <div class="container col-xxl-8 px-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="images/banners.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Knowledge is Power You Should Enhance with us</h1>
                <p class="lead">Experience a cinematic journey through the power of words and storytelling.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="contact.php"> <button
                            style="background-image: linear-gradient(to right, #493971 0%, #a921f8 51%, #a703e7 100%);"
                            type="button"
                            class="btn btn-primary border-0 rounded-2 btn-lg px-4 fw-bold me-md-2">Contact</button></a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <!-- Card Slider Start -->
    <div id="winners"><br><br><br>
        <center><a class="text-white categoryheading" id="winners">Winners</a></center>
        <br><br>





        <section class="Am-img-slider-container ">
            <div class="swiper blog-slider">

                <div class="swiper-wrapper">
                    <!-- slide -->
                    <?php

                    $query = "SELECT winner.* , customer.c_img , customer.c_email , competition_list.comp_name , competition_list.comp_description , competition_list.comp_prize_amount , competition_submissions.sub_date , competition_submissions.sub_file  from winner INNER JOIN customer ON winner.customer_id = customer.c_id INNER JOIN competition_list ON winner.competition_id = competition_list.comp_id INNER JOIN competition_submissions ON winner.submissions_id = competition_submissions.sub_id";
                    $execute = mysqli_query($conn, $query);

                    if (mysqli_num_rows($execute)) {
                        while ($row = mysqli_fetch_array($execute)) {
                            ?>
                            <div class="swiper-slide">
                                <div class="blog-slider__imgs">

                                    <img class="back-image" alt="" src="<?php echo "images/" . $row['c_img'] ?>" />
                                    <div class="movie-image-container">

                                        <img class="movie-image  blog-slider__img" alt=""
                                            src="<?php echo "images/" . $row['c_img'] ?>" />
                                    </div>
                                </div>
                                <div class="blog-slider__content">
                                    <span class="blog-slider__rate">
                                        <?php echo $row['c_email'] ?>

                                    </span>
                                    <p class="blog-slider__text">

                                        Competition :
                                        <?php echo $row['comp_description'] ?> <br>
                                        Category :
                                        <?php echo $row['comp_name'] ?> <br>
                                        Prize :
                                        <?php echo $row['comp_prize_amount'] ?> <br>

                                    </p>

                                </div>
                            </div>
                            <?php
                        }
                    }

                    ?>

                </div>

                <!-- <div class="swiper-pagination"></div> -->
            </div>

        </section>

    </div>

    <!-- Card Slider End -->



    <!-- ----------------------------------------------------- -->


    <!-- javascript Library -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Swiper JS end -->

    <script src="custom.js"></script>
    <!-- <script src="js/bootstrap.bundle.js"></script> -->
    <script src="jquery.js"></script>







    <div class="container text-center justify-content-center" id="Novel.php"><br><br><br>
        <a class="text-white categoryheading">Novel</a>

        <div class="row">



            <?php

            $query = "SELECT * FROM book_detail WHERE b_category = 5";

            $runn = mysqli_query($conn, $query);

            if (mysqli_num_rows($runn)) {

                while ($rows = mysqli_fetch_array($runn)) {

                    ?>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-5 pt-5 search">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="product_page.php?id=<?php echo $rows['b_id'] ?>"><img
                                        src="<?php echo "images/" . $rows['thumbnail_img'] ?>" style="width: 150px;" /></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title "><a href="product_page.php?id=<?php echo $rows['b_id'] ?>">

                                        <?php echo $rows['b_name'] ?>
                                    </a></h3>
                                <ul class="rating">
                                    <a href="product_page.php?id=<?php echo $rows['b_id'] ?>">
                                        <li class="bx bx-shopping-bag fs-3"></li>
                                    </a>
                                </ul>
                                <div class="price">
                                    <h5 class="fw-bolder">
                                        <?php echo $rows['b_price'] ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>


        </div>
    </div>




    <div class="container text-center justify-content-center" id="Comics.php"><br><br><br>

        <a class="text-white categoryheading">Comics</a>

        <div class="row">



            <?php

            $query = "SELECT * FROM book_detail WHERE b_category = 6";

            $runn = mysqli_query($conn, $query);

            if (mysqli_num_rows($runn)) {

                while ($rows = mysqli_fetch_array($runn)) {

                    ?>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-5 pt-5 search">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="product_page.php?id=<?php echo $rows['b_id'] ?>"><img
                                        src="<?php echo "images/" . $rows['thumbnail_img'] ?>" style="width: 150px;" /></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title "><a href="product_page.php?id=<?php echo $rows['b_id'] ?>">

                                        <?php echo $rows['b_name'] ?>
                                    </a></h3>
                                <ul class="rating">
                                    <a href="product_page.php?id=<?php echo $rows['b_id'] ?>">
                                        <li class="bx bx-shopping-bag fs-3"></li>
                                    </a>
                                </ul>
                                <div class="price">
                                    <h5 class="fw-bolder">
                                        <?php echo $rows['b_price'] ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>


        </div>
    </div>



    <div class="container text-center justify-content-center" id="Story Books.php"><br><br><br>

        <a class="text-white categoryheading">Story Books</a>

        <div class="row">



            <?php

            $query = "SELECT * FROM book_detail WHERE b_category = 16";

            $runn = mysqli_query($conn, $query);

            if (mysqli_num_rows($runn)) {

                while ($rows = mysqli_fetch_array($runn)) {

                    ?>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-5 pt-5 search">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="product_page.php?id=<?php echo $rows['b_id'] ?>"><img
                                        src="<?php echo "images/" . $rows['thumbnail_img'] ?>" style="width: 150px;" /></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title "><a href="product_page.php?id=<?php echo $rows['b_id'] ?>">

                                        <?php echo $rows['b_name'] ?>
                                    </a></h3>
                                <ul class="rating">
                                    <a href="product_page.php?id=<?php echo $rows['b_id'] ?>">
                                        <li class="bx bx-shopping-bag fs-3"></li>
                                    </a>
                                </ul>
                                <div class="price">
                                    <h5 class="fw-bolder">
                                        <?php echo $rows['b_price'] ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>


        </div>
    </div>




    <div class="container text-center justify-content-center" id="General Knowledge Books.php"><br><br><br>

        <a class="text-white categoryheading">General Knowledge Books</a>

        <div class="row">



            <?php

            $query = "SELECT * FROM book_detail WHERE b_category = 17";

            $runn = mysqli_query($conn, $query);

            if (mysqli_num_rows($runn)) {

                while ($rows = mysqli_fetch_array($runn)) {

                    ?>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 mt-5 pt-5 search">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="product_page.php?id=<?php echo $rows['b_id'] ?>"><img
                                        src="<?php echo "images/" . $rows['thumbnail_img'] ?>" style="width: 150px;" /></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title "><a href="product_page.php?id=<?php echo $rows['b_id'] ?>">

                                        <?php echo $rows['b_name'] ?>
                                    </a></h3>
                                <ul class="rating">
                                    <a href="product_page.php?id=<?php echo $rows['b_id'] ?>">
                                        <li class="bx bx-shopping-bag fs-3"></li>
                                    </a>
                                </ul>
                                <div class="price">
                                    <h5 class="fw-bolder">
                                        <?php echo $rows['b_price'] ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>


        </div>
    </div>
    <br><br><br>



    <?php

    if (isset($_SESSION['customerid'])) {
        ?>

        <section id="prices" class="price_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 section-title text-center mb-5">

                        <a class="text-white categoryheading" id="subscription">Our Subscriptions!</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card p-4 text-center rounded-3">
                            <h5 class="text-decoration-underline mb-4" style="font-size: 25px;"></h5>
                            <ul class="list-unstyled">
                                <li>
                                    <p style="font-size: 15px; " class="CC">1 YEAR PLAN </p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC">STORY BOOKS </p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC"> NOVELS</p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC">(50% off)</p>
                                </li>
                            </ul>
                            <hr />
                            <h3>RS 60,000</h3>
                            <a href="#" class="main-btn" id="SS" onclick="oneyear()">subscription</a>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card p-4 text-center rounded-3">
                            <h5 class="text-decoration-underline mb-4" style="font-size: 25px;"></h5>
                            <ul class="list-unstyled">
                                <li>
                                    <p style="font-size: 15px;" class="CC">2 YEAR PLAN</p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC"> STORY BOOKS </p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC"> NOVELS & COMICS</p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC">(70% off)</p>
                                </li>
                            </ul>
                            <hr />
                            <h3>RS 80,000</h3>
                            <a href="#" class="main-btn" id="SS" onclick="twoyear()">subscription</a>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card p-4 text-center rounded-3">
                            <h5 class="text-decoration-underline mb-4" style="font-size: 25px;"></h5>
                            <ul class="list-unstyled">
                                <li>
                                    <p style="font-size: 15px;" class="CC">3 YEAR PLAN</p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC"> STORY BOOKS & NOVELS</p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC">COMICS & General Knowledge Books</p>
                                </li>
                                <li>
                                    <p style="font-size: 15px;" class="CC">(90% off)</p>
                                </li>
                            </ul>
                            <hr />
                            <h3>RS 100,000</h3>
                            <a href="#" class="main-btn" id="SS" onclick="threeyear()">subscription</a>

                        </div>

                    </div>


                </div>

            </div>

            </div>

        </section>


        <?php
    } else {
        echo "     <section id='prices' class='price_wrapper'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12 section-title text-center mb-5'>
                <a class='text-white categoryheading' id='subscription'>Our Subscriptions!</a>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-4 col-md-6 mb-4'>
                    <div class='card p-4 text-center rounded-3'>
                        <h5 class='text-decoration-underline mb-4' style='font-size: 25px;'></h5>
                        <ul class='list-unstyled'>
                            <li>
                                <p style='font-size: 15px; ' class='CC'>1 YEAR PLAN </p>
                            </li>
                            <li>
                                <p style='font-size: 15px;' class='CC'>STORY BOOKS </p>
                            </li>
                            <li>
                                <p style='font-size: 15px;' class='CC'> NOVELS</p>
                            </li>
                            <li>
                                <p style='font-size: 15px;' class='CC'>(50% off)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>RS 60,000</h3>
                        <a href='customersignup.php' class='main-btn' id='ss' onclick='signup()'>subscription</a>

                    </div>

                </div>
                <div class='col-lg-4 col-md-6 mb-4'>
                <div class='card p-4 text-center rounded-3'>
                    <h5 class='text-decoration-underline mb-4' style='font-size: 25px;'></h5>
                    <ul class='list-unstyled'>
                        <li>
                            <p style='font-size: 15px; ' class='CC'>2 YEAR PLAN </p>
                        </li>
                        <li>
                            <p style='font-size: 15px;' class='CC'>STORY BOOKS </p>
                        </li>
                        <li>
                            <p style='font-size: 15px;' class='CC'> NOVELS &  COMICS</p>
                        </li>
                        <li>
                            <p style='font-size: 15px;' class='CC'>(70% off)</p>
                        </li>
                    </ul>
                    <hr />
                    <h3>RS 80,000</h3>
                    <a href='customersignup.php' class='main-btn' id='ss' onclick='signup()'>subscription</a>

                </div>

            </div>
            <div class='col-lg-4 col-md-6 mb-4'>
            <div class='card p-4 text-center rounded-3'>
                <h5 class='text-decoration-underline mb-4' style='font-size: 25px;'></h5>
                <ul class='list-unstyled'>
                    <li>
                        <p style='font-size: 15px; ' class='CC'>3 YEAR PLAN </p>
                    </li>
                    <li>
                        <p style='font-size: 15px;' class='CC'>STORY BOOKS & NOVELS </p>
                    </li>
                    <li>
                        <p style='font-size: 15px;' class='CC'> COMICS & General Knowledge Books</p>
                    </li>
                    <li>
                        <p style='font-size: 15px;' class='CC'>(90% off)</p>
                    </li>
                </ul>
                <hr />
                <h3>RS 100,000</h3>
                <a href='customersignup.php' class='main-btn' id='ss' onclick='signup()'>subscription</a>

            </div>

        </div>


            </div>

        </div>

        </div>

    </section>";
    }



    ?>




    <script>
        function signup() {
            alert('You Need To Login First!');
        }
        function oneyear() {
            alert('You Got Our 1Year Subscription!');
            window.location.href = 'index.php';
        }
        function twoyear() {
            alert('You Got Our 2Year Subscription!');
            window.location.href = 'index.php';
        }
        function threeyear() {
            alert('You Got Our 3Year Subscription!');
            window.location.href = 'index.php';
        }
    </script>
    <script type="text/javascript" src="file1.js"></script>

    <?php

    include 'footer.php';

    ?>