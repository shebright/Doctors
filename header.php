<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Doclik Doctors directory and Book HTML Template</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="shortcut icon" style="border-radius: 100px;" href="assets/favicon.png" type="image/x-icon">
<link rel="icon" style="border-radius: 100px;" href="assets/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">


    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <!-- Header Wrapper -->
<div class="header-container d-flex align-items-center justify-content-between">
    
    <!-- Logo Box -->
    <div class="logo-box">
        <div class="logo">
            <a href="index.html"><img style="height: 100px;" src="assets/logo.png" alt=""></a>
        </div>
    </div>

    <!-- Right Column -->
    <div class="right-column d-flex align-items-center">

        <!-- Navigation -->
        <div class="nav-outer">
            <!-- Mobile Navigation Toggler -->
            <div class="mobile-nav-toggler">
                <img src="assets/images/icons/icon-bar-2.png" alt="">
            </div>

            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                    <ul class="navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="doctors.php">Doctors</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li class="dropdown"><a href="#">Doctors Details</a>
                            <ul>
                                <li><a href="#">Doctor Name</a></li>
                                <li><a href="#">Doctor Name</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Right Info (Search + Join Now) -->
        <div class="navbar-right-info d-flex align-items-center ms-3">
            <div class="search-toggler me-2"><i class="icon-search"></i></div>
            <div class="link-btn">
                <a href="#" class="theme-btn"><span><i>+</i> Join Now</span></a>
            </div>
        </div>
    </div>
</div>

        <!--End Header Upper-->

        

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon icon_close_alt2"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img style="height: 100px;" src="assets/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span class="icon_close_alt2"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
