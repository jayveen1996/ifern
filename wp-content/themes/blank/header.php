<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

	<header id="masthead" class="site-header">
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
