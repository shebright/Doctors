<?php
require_once('header.php')
?>
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

    <!-- Page Title -->
    <section class="page-title style-two" style="background-image: url(assets/images/background/bg-2.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Doctors List</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.html">Homepage</a></li>
                        <li>Doctors List</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Search form two -->
    <div class="search-form-two style-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-5">
                            <h5>Type Keyword(s)</h5>
                            <input type="search" placeholder="Ex: Dr. Andy or JDC Hospital etc"> 
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group-two">
                                <h5>Select Options</h5>
                                <ul class="select-box">
                                    <li>
                                        <div class="single-checkbox">
                                            <input type="radio" name="check-box" id="check1" checked="">
                                            <label for="check1"><span></span>All</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-checkbox">
                                            <input type="radio" name="check-box" id="check2">
                                            <label for="check2"><span></span>Doctor</label>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-checkbox">
                                            <input type="radio" name="check-box" id="check3">
                                            <label for="check3"><span></span>Hospital/Clinic</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 form-btn">
                            <button type="submit"><i class="icon-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Doctors Page -->
    <div class="doctors-page full-width-page">
        <div class="auto-container">
            <div class="row">
                <div class="left-clumn col-xl-5 col-lg-6">
                    <div class="doctor-page-wrapper">
                        <div class="item-shorting">
                            <div class="left-column">
                                <h3>Showing 1-6 of 20 Results</h3>
                            </div>
                            <div class="right-column clearfix">
                                <div class="short-box clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Sort by">Sort by</option>
                                           <option value="1">Cardiology</option>
                                           <option value="2">Nurology</option>
                                           <option value="4">Pragnency</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="menu-box column-filter">
                                    <button class="list-view"><i class="fal fa-list-ul"></i></button>
                                    <button class="grid-view on"><i class="icon_border-all"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper grid">
                            <div class="list-view">
                                <div class="row">
                                    <div class="col-lg-12 doctor-block-two">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-44.jpg" alt="">
                                            </div>
                                            <div class="lower-content">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                                <div class="top-content">
                                                    <h4>Dr. Chewing Shinlong <span class="category">Ophthalmologist</span></h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text-two">Aute irure dolor reprehenderit cepteur ocaecat cupidatate ipsum <br> proident int sunt indys ipsum quis. Venium mini ullamco.</div>
                                                    <div class="text"><i class="icon_pin"></i>34 Sandpiper Lane, Amaganset, Caifornia 11930 - USA</div>
                                                </div>
                                                <div class="link-btn">
                                                    <a href="#" class="theme-btn"><span><i class="icon_calendar"></i> Check Availability</span></a>
                                                    <a href="#" class="theme-btn"><span><i class="icon_phone"></i>Book Today</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 doctor-block-two">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-45.jpg" alt="">
                                            </div>
                                            <div class="lower-content">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                                <div class="top-content">
                                                    <h4>Dr. Maria Sofiya<span class="category">Pathologist</span></h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text-two">Aute irure dolor reprehenderit cepteur ocaecat cupidatate ipsum <br> proident int sunt indys ipsum quis. Venium mini ullamco.</div>
                                                    <div class="text"><i class="icon_pin"></i> 1169 Daytona St, Atlantic Beach Newyork 03509 - USA</div>
                                                </div>
                                                <div class="link-btn">
                                                    <a href="#" class="theme-btn"><span><i class="icon_calendar"></i> Check Availability</span></a>
                                                    <a href="#" class="theme-btn"><span><i class="icon_phone"></i>Book Today</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 doctor-block-two">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-46.jpg" alt="">
                                            </div>
                                            <div class="lower-content">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                                <div class="top-content">
                                                    <h4>Dr. Shayn Cannon <span class="category">Cardiologist</span></h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text-two">Aute irure dolor reprehenderit cepteur ocaecat cupidatate ipsum <br> proident int sunt indys ipsum quis. Venium mini ullamco.</div>
                                                    <div class="text"><i class="icon_pin"></i> 27 Flanders Rd, Suite 180, East Lyme, NY 01233 - USA</div>
                                                </div>
                                                <div class="link-btn">
                                                    <a href="#" class="theme-btn"><span><i class="icon_calendar"></i> Check Availability</span></a>
                                                    <a href="#" class="theme-btn"><span><i class="icon_phone"></i>Book Today</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 doctor-block-two">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-47.jpg" alt="">
                                            </div>
                                            <div class="lower-content">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                                <div class="top-content">
                                                    <h4>Dr. Vincent Brinky <span class="category">Ophthalmologist</span></h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text-two">Aute irure dolor reprehenderit cepteur ocaecat cupidatate ipsum <br> proident int sunt indys ipsum quis. Venium mini ullamco.</div>
                                                    <div class="text"><i class="icon_pin"></i> 34 Sandpiper Lane, Amaganset, Caifornia 11930 - USA</div>
                                                </div>
                                                <div class="link-btn">
                                                    <a href="#" class="theme-btn"><span><i class="icon_calendar"></i> Check Availability</span></a>
                                                    <a href="#" class="theme-btn"><span><i class="icon_phone"></i>Book Today</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 doctor-block-two">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-48.jpg" alt="">
                                            </div>
                                            <div class="lower-content">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                                <div class="top-content">
                                                    <h4>Dr. Maria Sofiya<span class="category">Pathologist</span></h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text-two">Aute irure dolor reprehenderit cepteur ocaecat cupidatate ipsum <br> proident int sunt indys ipsum quis. Venium mini ullamco.</div>
                                                    <div class="text"><i class="icon_pin"></i> 34 Sandpiper Lane, Amaganset <br> Caifornia 11930</div>
                                                </div>
                                                <div class="link-btn">
                                                    <a href="#" class="theme-btn"><span><i class="icon_calendar"></i> Check Availability</span></a>
                                                    <a href="#" class="theme-btn"><span><i class="icon_phone"></i>Book Today</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="post-pagination text-center">
                                    <li><span class="current">1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="grid-view">
                                <div class="row">
                                    <div class="col-lg-6 col-md-4 doctor-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-3.jpg" alt="">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="top-content">
                                                    <span class="category">Ophthalmologist</span>
                                                    <h4>Dr. Chewing Shinlong</h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text"><i class="icon_pin"></i> 34 Sandpiper Lane, Amaganset <br> Caifornia 11930</div>
                                                </div>
                                                <div class="bottom-content">
                                                    <ul>
                                                        <li><a href="#"><i class="icon_calendar"></i> Availability</a></li>
                                                        <li><a href="#"><i class="icon_phone"></i>Book Today</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 doctor-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-4.jpg" alt="">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="top-content">
                                                    <span class="category">Cardiologist</span>
                                                    <h4>Dr. Vincent Brinky</h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text"><i class="icon_pin"></i> 27 Flanders Rd, Suite 180, East <br>  Lyme, NY 01233 </div>
                                                </div>
                                                <div class="bottom-content">
                                                    <ul>
                                                        <li><a href="#"><i class="icon_calendar"></i> Availability</a></li>
                                                        <li><a href="#"><i class="icon_phone"></i>Book Today</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 doctor-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-5.jpg" alt="">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart"></i></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="top-content">
                                                    <span class="category">Pathologist</span>
                                                    <h4>Dr. Shayn Cannon</h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text"><i class="icon_pin"></i> 1169 Daytona St, Atlantic Beach <br> Newyork 03509</div>
                                                </div>
                                                <div class="bottom-content">
                                                    <ul>
                                                        <li><a href="#"><i class="icon_calendar"></i> Availability</a></li>
                                                        <li><a href="#"><i class="icon_phone"></i>Book Today</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 doctor-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-6.jpg" alt="">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart_alt"></i></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="top-content">
                                                    <span class="category">Ophthalmologist</span>
                                                    <h4>Dr. Chewing Shinlong</h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text"><i class="icon_pin"></i> 34 Sandpiper Lane, Amaganset <br> Caifornia 11930</div>
                                                </div>
                                                <div class="bottom-content">
                                                    <ul>
                                                        <li><a href="#"><i class="icon_calendar"></i> Availability</a></li>
                                                        <li><a href="#"><i class="icon_phone"></i>Book Today</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 doctor-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-7.jpg" alt="">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart_alt"></i></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="top-content">
                                                    <span class="category">Cardiologist</span>
                                                    <h4>Dr. Vincent Brinky</h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text"><i class="icon_pin"></i> 27 Flanders Rd, Suite 180, East <br>  Lyme, NY 01233 </div>
                                                </div>
                                                <div class="bottom-content">
                                                    <ul>
                                                        <li><a href="#"><i class="icon_calendar"></i> Availability</a></li>
                                                        <li><a href="#"><i class="icon_phone"></i>Book Today</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 doctor-block">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="assets/images/resource/image-8.jpg" alt="">
                                                <div class="rating"><i class="icon_star"></i>4.9</div>
                                                <div class="like"><i class="icon_heart_alt"></i></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="top-content">
                                                    <span class="category">Pathologist</span>
                                                    <h4>Dr. Maria Sofiya</h4>
                                                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                                                    <div class="text"><i class="icon_pin"></i> 1169 Daytona St, Atlantic Beach <br> Newyork 03509</div>
                                                </div>
                                                <div class="bottom-content">
                                                    <ul>
                                                        <li><a href="#"><i class="icon_calendar"></i> Availability</a></li>
                                                        <li><a href="#"><i class="icon_phone"></i>Book Today</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="post-pagination text-center">
                                    <li><span class="current">1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-clumn col-xl-7 col-lg-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="1440" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

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













