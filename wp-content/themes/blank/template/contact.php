<?php

/* Template Name: CONTACT */

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
                        <a class="navbar-brand" href="http://localhost/wordpress/wp-content/themes/blank/template/index.php"> <img src="http://localhost/wordpress/wp-content/uploads/2021/06/ifern-logo.png" alt="logo" style="width:100px;"> </a>
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
                                    <a class ="nav-link" href="http://localhost/wordpress/shop">Shop</a>
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
                            <!-- <div class="dropdown cart">
                                <a class="dropdown-toggle" href="cart" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">

                                    </div>
                                </div>
                            </div> -->
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
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" ></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30890.059283119856!2d121.02099567271205!3d14.584402848007267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c835c77b9b79%3A0xdc4947c8b9d237f8!2sMandaluyong%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1622815692035!5m2!1sen!2sph" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy" style="position:absolute; top:400px"></iframe>
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <a href="#" class="btn_3 button-contactForm">Send Message</a>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Philippines</h3>
              <p>Mandaluyong City</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>8982-3376(982-FERN)</h3>
              <p>09428423339</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>inquiries@i-fern.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!--::footer_part start::-->
  <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="http://localhost/wordpress/wp-content/themes/blank/template/index.php"><img src="http://localhost/wordpress/wp-content/uploads/2021/06/ifern-logo.png" alt="logo" style="width:100px;"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="http://localhost/wordpress/wp-content/themes/blank/template/index.php">Home</a>
                                <a href="http://localhost/wordpress/wp-content/themes/blank/template/about.php">About</a>
                                <a href="http://localhost/wordpress/wp-content/themes/blank/template/product_list.php">Products</a>

                                <a href="http://localhost/wordpress/wp-content/themes/blank/template/contact.php">Contact</a>
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


    </footer>
    <!--::footer_part end::-->



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
