<?php
require_once('header.php')
?>


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-2.png);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Page Not Found!</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.html">Homepage</a></li>
                        <li>404 Error Page</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Error Page -->
    <section class="error-section">
        <div class="auto-container">
            <div class="content">
                <h1>404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
                <a href="index.html" class="theme-btn btn-style-one"><span> Go to home page</span></a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="content">
                        <div class="icon"><span class="icon-envelope"></span></div>
                        <h3>Newsletter Subscribe </h3>
                        <div class="text">Urgent 24/7 Medical Directory Services</div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form class="ajax-sub-form" method="post">
                            <div class="form-group">
                                <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                <button type="submit" class="theme-btn"><span>Subscribe <i class="icon-arrow-right"></i></span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        require_once('footer.php')
    ?>