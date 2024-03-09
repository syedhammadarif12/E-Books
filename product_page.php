<?php

include 'navbar.php';

$id = $_GET['id'];

$query = "SELECT * FROM book_detail WHERE b_id = $id";
$runn = mysqli_query($conn, $query);
$data = mysqli_fetch_array($runn);

?>

<title>Product Page</title>
<script>

    ; (function ($) {
        $.fn.picZoomer = function (options) {
            var opts = $.extend({}, $.fn.picZoomer.defaults, options),
                $this = this,
                $picBD = $('<div class="picZoomer-pic-wp"></div>').css({ 'width': opts.picWidth + 'px', 'height': opts.picHeight + 'px' }).appendTo($this),
                $pic = $this.children('img').addClass('picZoomer-pic').appendTo($picBD),
                $cursor = $('<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>').appendTo($picBD),
                cursorSizeHalf = { w: $cursor.width() / 2, h: $cursor.height() / 2 },
                $zoomWP = $('<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>').appendTo($this),
                $zoomPic = $zoomWP.find('.picZoomer-zoom-pic'),
                picBDOffset = { x: $picBD.offset().left, y: $picBD.offset().top };


            opts.zoomWidth = opts.zoomWidth || opts.picWidth;
            opts.zoomHeight = opts.zoomHeight || opts.picHeight;
            var zoomWPSizeHalf = { w: opts.zoomWidth / 2, h: opts.zoomHeight / 2 };


            $zoomWP.css({ 'width': opts.zoomWidth + 'px', 'height': opts.zoomHeight + 'px' });
            $zoomWP.css(opts.zoomerPosition || { top: 0, left: opts.picWidth + 30 + 'px' });

            $zoomPic.css({ 'width': opts.picWidth * opts.scale + 'px', 'height': opts.picHeight * opts.scale + 'px' });


            $picBD.on('mouseenter', function (event) {
                $cursor.show();
                $zoomWP.show();
                $zoomPic.attr('src', $pic.attr('src'))
            }).on('mouseleave', function (event) {
                $cursor.hide();
                $zoomWP.hide();
            }).on('mousemove', function (event) {
                var x = event.pageX - picBDOffset.x,
                    y = event.pageY - picBDOffset.y;

                $cursor.css({ 'left': x - cursorSizeHalf.w + 'px', 'top': y - cursorSizeHalf.h + 'px' });
                $zoomPic.css({ 'left': -(x * opts.scale - zoomWPSizeHalf.w) + 'px', 'top': -(y * opts.scale - zoomWPSizeHalf.h) + 'px' });

            });
            return $this;

        };
        $.fn.picZoomer.defaults = {
            picHeight: 320,
            scale: 5,
            zoomerPosition: { top: '-12px', left: '300px' },

            zoomWidth: 550,
            zoomHeight: 370
        };
    })(jQuery);



    $(document).ready(function () {
        $('.picZoomer').picZoomer();
        $('.piclist li').on('click', function (event) {
            var $pic = $(this).find('img');
            $('.picZoomer-pic').attr('src', $pic.attr('src'));
        });
    });

</script>

<style>
    .picZoomer {
        position: relative;
        /*margin-left: 40px;
    padding: 15px;*/
    }

    .picZoomer-pic-wp {
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .picZoomer-pic-wp:hover .picZoomer-cursor {
        display: block;
    }

    .picZoomer-zoom-pic {
        position: absolute;
        top: 0;
        left: 0;
    }

    .picZoomer-pic {
        /*width: 100%;
    height: 100%;*/
    }

    .picZoomer-zoom-wp {
        display: none;
        position: absolute;
        z-index: 999;
        overflow: hidden;
        border: 1px solid #eee;
        height: 460px;
        margin-top: -19px;
    }

    .picZoomer-cursor {
        display: none;
        cursor: crosshair;
        width: 100px;
        height: 100px;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 50%;
        border: 1px solid #eee;
        background-color: rgba(0, 0, 0, .1);
    }


    .my_img {
        vertical-align: middle;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        height: 100%;
    }



    .picZoomer-pic-wp,
    .picZoomer-zoom-wp {
        border: 1px solid #eee;
    }



    .section-bg {
        /* background-color: #fff1e0; */
    }

    .sections {
        padding: 60px 30px;
        margin-top: 30px;
    }


    /*===pic-Zoom===*/
    /* ._boxzoom .zoom-thumb {
    width: 90px;
    display: inline-block;
    vertical-align: top;
    margin-top: 0px;
} */
    /* ._boxzoom .zoom-thumb ul.piclist {
    padding-left: 0px;
    top: 0px;
} */
    ._boxzoom ._product-images {
        width: 80%;
        margin-top: 30px;
        display: inline-block;
    }

    ._boxzoom ._product-images .picZoomer {
        width: 100%;
    }

    ._boxzoom ._product-images .picZoomer .picZoomer-pic-wp img {
        left: 0px;
    }

    ._boxzoom ._product-images .picZoomer img.my_img {
        width: 100%;
    }


    /*======products-details=====*/
    ._product-detail-content {
        background: #fff;
        padding: 15px;
        margin-right: 330px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    ._product-detail-content p._p-name {
        color: black;
        font-size: 20px;
        border-bottom: 1px solid lightgray;
        padding-bottom: 12px;
    }

    .p-list span {
        margin-right: 15px;
    }

    .p-list span.price {
        font-size: 25px;
        color: #318234;
    }

    ._p-qty>span {
        color: black;
        margin-right: 15px;
        font-weight: 500;
    }

    ._p-qty .value-button {
        display: inline-flex;
        border: 0px solid #ddd;
        margin: 0px;
        width: 30px;
        height: 35px;
        justify-content: center;
        align-items: center;
        background: #fd7f34;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #fff;
    }

    ._p-qty .value-button {
        border: 0px solid #fe0000;
        height: 35px;
        font-size: 20px;
        font-weight: bold;
    }

    ._p-qty input#number {
        text-align: center;
        border: none;
        border-top: 1px solid #fe0000;
        border-bottom: 1px solid #fe0000;
        margin: 0px;
        width: 50px;
        height: 35px;
        font-size: 14px;
        box-sizing: border-box;
    }

    ._p-add-cart {
        margin-left: 0px;
        margin-bottom: 15px;
    }

    .p-list {
        margin-bottom: 10px;
    }

    ._p-features>span {
        display: block;
        font-size: 16px;
        color: #000;
        font-weight: 500;
    }

    ._p-add-cart .buy-btn {
        background-color: #fd7f34;
        color: #fff;
    }

    ._p-add-cart .btn {
        text-transform: capitalize;
        padding: 6px 20px;
        /* width: 200px; */
        border-radius: 52px;
    }

    ._p-add-cart .btn {
        margin: 0px 8px;
    }

    ._p-qty .decrease_ {
        position: relative;
        right: -5px;
        top: 3px;
    }

    ._p-qty .increase_ {
        position: relative;
        top: 3px;
        left: -5px;
    }

    .cart-btn {
        padding: 12px 25px 10px;
        text-align: center;
        color: white;
        font-size: var(--fontSize);
        transition: var(--transition);
        display: inline-block;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 0;
        background-color: rgb(73, 57, 113);
        overflow: hidden;
        white-space: nowrap;
        border: 0;
        font-weight: 500;
        margin-top: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>





<section id="services" class="services sections section-bg">
    <div class="container-fluid">
        <div class="row row-sm">
            <div class="col-md-3 _boxzoom">
                <!-- <div class="zoom-thumb">
               <ul class="piclist">
                  <li><img src="https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/" alt=""></li>
               </ul>
            </div> -->
                <form action="addtocart.php" method="POST">
                    <div class="_product-images">
                        <div class="picZoomer">
                            <img class="my_img" src="<?php echo "images/" . $data['thumbnail_img'] ?>" alt=""><input
                                type="hidden" name="thumbnail_img" readonly
                                value="<?php echo $data['thumbnail_img']; ?>">
                        </div>
                    </div>
            </div>
            <div class="col-md-9">
                <div class="_product-detail-content">
                    <h3 class="_p-name fw-bolder">
                        <?php echo $data['b_name']; ?><input type="hidden" name="b_name" readonly
                            value="<?php echo $data['b_name']; ?>">
                            <input type="hidden" name="booka_id" readonly
                            value="<?php echo $data['b_id']; ?>">
                    </h3>
                    <div class="_p-price-box">
                        <div class="p-list">
                            <span class="price fw-bold">
                                <?php echo $data['b_price']; ?><input type="hidden" name="b_price" readonly
                                    value="<?php echo $data['b_price']; ?>">
                            </span>
                        </div>
                        <span>Add Quantity</span>
                        <input style="width: 70px;" type="number"
                            class="border-black text-center fw-bold text-dark border-4 rounded-0" name="b_quantity"
                            value="1" min="1">
                        <div class="_p-features">
                            <span> Description </span>
                            <hr>
                            <?php echo $data['b_description']; ?>
                        </div>
                        <hr>
                        <?php
                        $id = $_GET['id'];

                        $query2 = "SELECT * FROM  book_detail WHERE b_id = $id";
                        $run = mysqli_query($conn, $query2);
                        $row = mysqli_fetch_array($run);

                        //   if (mysqli_num_rows($run)) {
                        //     while ($row = mysqli_fetch_array($run)) {
                        ?>
                        <a class="btn btn-warning btn-md rounded-0 fw-bold" target="_blank"
                            href="generatepdf.php?id=<?php echo $row['b_id'] ?>">View PDF</a>&nbsp&nbsp&nbsp
                        <?php
                        //     }
                        //   }
                        ?>


                        <input type="submit" name="submit" class="cart-btn fw-bolder" value="Add to Cart">


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<br><br><br><br><br>

<?php
include 'footer.php';
?>