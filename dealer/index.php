<?php

include 'navbar.php';

?>

<head>
    <style>

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
                    <a href="contact.php"> <button style="background-image: linear-gradient(to right, #493971 0%, #a921f8 51%, #a703e7 100%);" type="button"
                            class="btn btn-primary border-0 rounded-2 btn-lg px-4 fw-bold me-md-2">Contact</button></a>
                </div>
            </div>
        </div>
    </div>

<br><br><br><br><br>



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

    include 'footer.php';

    ?>