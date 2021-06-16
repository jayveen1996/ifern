<?php

/* Template Name: SINGLE PRODUCT */

 ?>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>I-FERN</title>
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/animate.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/all.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/flaticon.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/magnific-popup.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/slick.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/blank/template/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="http://localhost/wordpress/wp-content/uploads/2021/06/ifern-logo.png" alt="logo" style="width:100px;"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/wordpress/wp-content/themes/blank/template/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/wordpress/wp-content/themes/blank/template/about.php">about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="http://localhost/wordpress/wp-content/themes/blank/template/product_list.php"> product list</a>
                                        <a class="dropdown-item" href="http://localhost/wordpress/wp-content/themes/blank/template/single-product.php">product details</a>

                                    </div>
                                </li>




                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/wordpress/wp-content/themes/blank/template/contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="product_img_slide owl-carousel">
            <div class="single_product_img">
              <img src="http://localhost/wordpress/wp-content/uploads/2021/06/trio.png" alt="#" class="img-fluid">
            </div>

          </div>
        </div>
        <div class="col-lg-8">
          <div class="single_product_text text-center">
            <h3>I-FERN POWER TRIO</h3>
            <p style="color:#3D550C"> TAKE THE POWER TRIO EVERYDAY. Super effective trio for overall health benefit.<br>
              THE POWER OF TRIO! When taken together makes them more potent.
            </p>

            <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <p>$5</p>
                </div>
              <div class="add_to_cart">
                  <a href="#" class="btn_3">add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
   <!-- subscribe part here -->
   <section class="subscribe_part section_padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="subscribe_part_content">
                      <h2>Get promotions & updates!</h2>
                      <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                      <div class="subscribe_form">
                          <input type="email" placeholder="Enter your mail">
                          <a href="#" class="btn_1">Subscribe</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- subscribe part end -->

  <!--::footer_part start::-->
  <footer class="footer_part">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="http://localhost/wordpress/wp-content/uploads/2021/06/ifern-logo.png" alt="logo" style="width:100px;"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="product_list.html">Products</a>

                                <a href="contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/jquery-1.12.1.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/popper.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/bootstrap.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/jquery.magnific-popup.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/owl.carousel.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/jquery.nice-select.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/slick.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/jquery.counterup.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/waypoints.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/contact.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/jquery.ajaxchimp.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/jquery.form.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/jquery.validate.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/mail-script.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/blank/template/js/custom.js"></script>
</body>

</html>
