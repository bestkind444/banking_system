<?php
session_start();
if (!isset($_SESSION['user_id'])) {
   header("location: ./login.php");
}



?>


<!DOCTYPE html>
<html lang="zxx">


<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/dark-theme.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <title>Raxa - Money Transfer & Online Banking HTML Template</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!--Preloader starts-->
        <div class="loader js-preloader">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <!--Preloader ends-->

        <!-- Theme Switcher Start -->
        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>
        <!-- Theme Switcher End -->
        
        <!-- Page Wrapper End -->
        <div class="page-wrapper">
        
            <!-- Header Section Start -->
           <?php  include "./include/navbar.php" ?> 
            <!-- Header Section End -->

            <!-- Hero Section Start -->
            <section class="hero-wrap style1 bg-spring">
                <img src="assets/img/hero/hero-shape-1.png" alt="Image" class="hero-shape-one">
                <img src="assets/img/hero/hero-shape-2.png" alt="Image" class="hero-shape-two">
                <img src="assets/img/hero/hero-shape-3.png" alt="Image" class="hero-shape-three">
                <img src="assets/img/hero/hero-shape-4.png" alt="Image" class="hero-shape-four md-none">
                <div class="hero-slider-two owl-carousel">
                    <div class="hero-slide-item">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="hero-content">
                                        <span>Simple. Transparent. Secure  </span>
                                        <h1>Fast & Secure Online Money Transfer</h1>
                                        <p>Dea of denouncing pleasure and praising pain was born and lete system, and expound the ac teachings aitems to sed quia non numquam amet sit dolor.</p>
                                        <a href="service-one.php" class="btn style1">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hero-img-wrap">
                                        <img src="assets/img/hero/hero-slide-4.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide-item">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="hero-content">
                                        <span>Reliable. Zero Service Charge  </span>
                                        <h1>Move Your Money In Easy Secured Steps</h1>
                                        <p>Dea of denouncing pleasure and praising pain was born and lete system, and expound the ac teachings aitems to sed quia non numquam amet sit dolor.</p>
                                        <a href="service-one.php" class="btn style1">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hero-img-wrap">
                                        <img src="assets/img/hero/hero-slide-5.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide-item">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="hero-content">
                                        <span>Easy. Fastest . Secure  </span>
                                        <h1>Secured &amp; Easy Online Payment Solution </h1>
                                        <p>Dea of denouncing pleasure and praising pain was born and lete system, and expound the ac teachings aitems to sed quia non numquam amet sit dolor.</p>
                                        <a href="service-one.php" class="btn style1">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hero-img-wrap">
                                        <img src="assets/img/hero/hero-slide-6.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </section>
            <!-- Hero Section End -->

            <!-- About Section Start -->
            <section class="about-wrap style1 ptb-100">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img-wrap">
                                <img src="assets/img/about/about-shape-1.png" alt="Image" class="about-shape-one bounce">
                                <img src="assets/img/about/about-shape-2.png" alt="Image" class="about-shape-two moveHorizontal">
                                <img src="assets/img/about/about-img-1.png" alt="Image" class="about-img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <img src="assets/img/about/about-shape-3.png" alt="Image" class="about-shape-three">
                                <div class="content-title style1">
                                    <span>Smart Banking</span>
                                    <h2>The Better Way To Save &amp; Invest Online Banking</h2>
                                    <p>There are many variations of passages of Lorem Ipsum amet avoilble but majority have suffered alteration in some form, by injected humur or randomise words which don't sure amet sit dolor quras alto lorem.</p>
                                </div>
                                <ul class="content-feature-list style1 list-style">
                                    <li><span><i class="flaticon-tick"></i></span>Cards that work all across the world.</li>
                                    <li><span><i class="flaticon-tick"></i></span>Highest Returns on your investments.</li>
                                    <li><span><i class="flaticon-tick"></i></span>No ATM fees. No minimum balance. No overdrafts.</li>
                                </ul>
                                <a href="about.php" class="btn style1">More About us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End -->

            <!-- Feature Section Start -->
            <section class="feature-wrap pt-100 pb-75 bg-albastor">
                <div class="container">
                    <div class="section-title style1 text-center mb-40">
                        <span>Our Feature</span>
                        <h2>Payment Services Worldwide</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="feature-card style1">
                                <div class="feature-info">
                                    <div class="feature-title">
                                        <span><img src="assets/img/feature/feature-icon-4.png" alt="Image"></span>
                                        <h3>Protect Your Card</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet dolor alut const slice elit aliquid dolor ametin perfer endis velit sed fuga volup tation sit praising pain.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="feature-card style1">
                                <div class="feature-info">
                                    <div class="feature-title">
                                        <span><img src="assets/img/feature/feature-icon-5.png" alt="Image"></span>
                                        <h3>Send Money</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet dolor alut const slice elit aliquid dolor ametin perfer endis velit sed fuga volup tation sit praising pain.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="feature-card style1">
                                <div class="feature-info">
                                    <div class="feature-title">
                                        <span><img src="assets/img/feature/feature-icon-6.png" alt="Image"></span>
                                        <h3>Online Banking</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet dolor alut const slice elit aliquid dolor ametin perfer endis velit sed fuga volup tation sit praising pain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature Section End -->

            <!-- Security Section Start -->
            <section class="security-wrap ptb-100">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 col-12 order-lg-1 order-2">
                            <div class="security-content">
                                <div class="content-title style1">
                                    <span>Banking Security</span>
                                    <h2>The Safest Way To Transact Your Money Fast</h2>
                                    <p>There are many variations of passages of Lorem Ipsum amet avoilble but majority have suffered alteration in some form, by injected humur or randomise words which don't sure amet sit dolor quras alto lorem.</p>
                                </div>
                                <div class="feature-item-wrap">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <img src="assets/img/security/security-icon-1.png" alt="Image">
                                        </div>
                                        <div class="feature-text">
                                            <h3>Pay Online Securely</h3>
                                            <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque .</p>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <img src="assets/img/security/security-icon-2.png" alt="Image">
                                        </div>
                                        <div class="feature-text">
                                            <h3>Convert Your Money In Seconds</h3>
                                            <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 order-lg-2 order-1">
                            <div class="security-img-wrap">
                                <img src="assets/img/security/security-shape-1.png" alt="Image" class="security-shape-one">
                                <img src="assets/img/security/security-shape-2.png" alt="Image" class="security-shape-two">
                                <img src="assets/img/security/security-1.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Security Section End -->

            <!-- Service Section Start -->
            <section class="service-wrap style1 pt-100 pb-75">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xl-6 col-lg-12 service-card-wrap">
                            <div class="row">
                                <div class="col-md-6 mmt-45">
                                    <div class="service-card style1">
                                        <span class="service-icon">
                                           <img src="assets/img/service/service-icon-1.png" alt="Image">
                                        </span>
                                        <h3><a href="service-details.php">Deadline Reminders</a></h3>
                                        <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p>
                                    </div>
                                    <div class="service-card style1">
                                        <span class="service-icon">
                                            <img src="assets/img/service/service-icon-2.png" alt="Image">
                                         </span>
                                        <h3><a href="service-details.php">Drag Functionality</a></h3>
                                        <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-card style1">
                                        <span class="service-icon">
                                            <img src="assets/img/service/service-icon-3.png" alt="Image">
                                         </span>
                                        <h3><a href="service-details.php">Simple Dashboard</a></h3>
                                        <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p>
                                    </div>
                                    <div class="service-card style1">
                                        <span class="service-icon">
                                            <img src="assets/img/service/service-icon-4.png" alt="Image">
                                         </span>
                                        <h3><a href="service-details.php">Email Notification</a></h3>
                                        <p>Lorem ipsum dolor sit ametus situlo consec tetur adicingus elittque coris sapite illo sit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="service-content">
                                <div class="content-title style1">
                                    <span>Our Services</span>
                                    <h2>Providing Services For Last 25 Years With Reputation</h2>
                                    <p>There are many variations of passages of Lorem Ipsum amet avoilble but majority have suffered alteration in some form, by injected humur or randomise words which don't sure amet sit dolor quras alto lorem.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id illum nam eligendi ut porro iusto sunt, cupiditate repudiandae ipsam.</p>
                                </div>
                                <a href="service-one.php" class="btn style1">View All Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service Section End -->

            <!-- App Section Start -->
            <section class="app-wrap style3 ptb-100">
                <div class="container">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-6">
                            <div class="app-img-wrap">
                                <img class="bounce" src="assets/img/app/app-1.png" alt="Image">
                                <img class="app-shape-one" src="assets/img/app/app-shape-1.png" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="app-content">
                                <div class="content-title style1">
                                    <span>Download Our Mobile App</span>
                                    <h2>You Can Find All Things You Need In Our App</h2>
                                    <p>There are many variations of passages of Lorem Ipsum amet avoilble but majority have suffered alteration in some form, by injected humur or randomise words which don't sure amet sit dolor quras alto lorem.</p>
                                </div>
                                <div class="app-btn">
                                    <a href="https://www.apple.com/app-store/" target="_blank"><img src="assets/img/apple-store.png" alt="Image"></a>
                                    <a href="https://play.google.com/store/apps" target="_blank"><img src="assets/img/play-store.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- App Section End -->
            
            <!-- Testimonial Section Start -->
            <section class="testimonial-wrap pt-100 pb-75 bg-albastor">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="section-title style1 text-center mb-40">
                                <span>Our Testimonials</span>
                                <h2>What Client Says About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slider-one owl-carousel">
                        <div class="testimonial-card style1">
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-1.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
                            <div class="client-info">
                                <h3>Jim Morison</h3>
                                <span>Director, BAT</span>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-2.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
                            <div class="client-info">
                                <h3>Alex Cruis</h3>
                                <span>CEO, IBAC</span>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-3.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
                            <div class="client-info">
                                <h3>Tom Haris</h3>
                                <span>Engineer, Olleo</span>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-4.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
                            <div class="client-info">
                                <h3>Harry Jackson</h3>
                                <span>Enterpreneur</span>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-5.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
                            <div class="client-info">
                                <h3>Chris Haris</h3>
                                <span>MD, ITec</span>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <div class="client-info-area">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="assets/img/testimonials/client-6.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                            <p class="client-quote">Lorem ipsum dolor sit amet adi elition repell tetur delni vel quam aliq earum explibo dolor eme fugiat amet dolor lorem sit consect.</p>
                            <div class="client-info">
                                <h3>Mark Owen</h3>
                                <span>Enterpreneur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <!-- Testimonial Section End -->

            <!-- Pricing Table Start -->
             <section class="pricing-table-wrap pt-100 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="section-title style1 text-center mb-40">
                                <span>Our Pricing Plan</span>
                                <h2>We Charge As Little As Possible</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-table style1">
                                <div class="pricing-header">
                                    <h2><img src="assets/img/pricing-star.png" alt="Image">Basic</h2>
                                    <div class="pricing-header-tag">
                                        <h3>$69<span>Per Month</span></h3>
                                    </div>
                                </div>
                                <div class="pricing-features">
                                    <ul class="list-style">
                                        <li class="checked"><i class="ri-check-line"></i>Free Mobile &amp; Online App</li>
                                        <li class="checked"><i class="ri-check-line"></i>Online System</li>
                                        <li class="checked"><i class="ri-check-line"></i>Data Full Access</li>
                                        <li class="unchecked"><i class="ri-close-line"></i>1 Business Mastercard </li>
                                        <li class="unchecked"><i class="ri-close-line"></i>24/7 Support</li>
                                    </ul>
                                </div>

                                <div class="purchase-pricing">
                                    <a href="login.php" class="btn style1">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-table style2">
                                <div class="pricing-header">
                                    <h2><img src="assets/img/pricing-star.png" alt="Image">Standard</h2>
                                    <div class="pricing-header-tag">
                                        <h3>$79<span>Per Month</span></h3>
                                    </div>
                                    <span class="feature-tag">Most Popular</span>
                                </div>
                                <div class="pricing-features">
                                    <ul class="list-style">
                                        <li class="checked"><i class="ri-check-line"></i>Free Mobile &amp; Online App</li>
                                        <li class="checked"><i class="ri-check-line"></i>Online System</li>
                                        <li class="checked"><i class="ri-check-line"></i>Data Full Access</li>
                                        <li class="checked"><i class="ri-check-line"></i>1 Business Mastercard </li>
                                        <li class="unchecked"><i class="ri-close-line"></i>24/7 Support</li>
                                    </ul>
                                </div>
                                <div class="purchase-pricing">
                                    <a href="login.php" class="btn style1">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="pricing-table style1">
                                <div class="pricing-header">
                                    <h2><img src="assets/img/pricing-star.png" alt="Image">Premium</h2>
                                    <div class="pricing-header-tag">
                                        <h3>$89<span>Per Month</span></h3>
                                    </div>
                                </div>
                                <div class="pricing-features">
                                    <ul class="list-style">
                                        <li class="checked"><i class="ri-check-line"></i>Free Mobile &amp; Online App</li>
                                        <li class="checked"><i class="ri-check-line"></i>Online System</li>
                                        <li class="checked"><i class="ri-check-line"></i>Data Full Access</li>
                                        <li class="checked"><i class="ri-check-line"></i>1 Business Mastercard </li>
                                        <li class="unchecked"><i class="ri-close-line"></i>24/7 Support</li>
                                    </ul>
                                </div>
                                <div class="purchase-pricing">
                                    <a href="login.php" class="btn style1">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing Table End -->

            <!-- CTA Section Start -->
            <section class="cta-wrap style1 ptb-100 ">
                <div class="container">
                    <img src="assets/img/cta-shape-1.png" alt="Image" class="cta-shape-one xs-none">
                    <img src="assets/img/cta-shape-2.png" alt="Image" class="cta-shape-two xs-none">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="content-title style1 text-center mb-40">
                                <span>Contact Us</span>
                                <h2>Raxa Is A Quick Solution For Business Payments</h2>
                            </div>
                            <div class="cta-btn">
                                <a href="login.php" class="btn style1">Personal Account</a>
                                <a href="login.php" class="btn style3">Business Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- CTA Section End -->
            
            <!-- Blog Section Start -->
            <section class="blog-wrap ptb-100 bg-concrete">
                <div class="container">
                    <div class="section-title style1 text-center mb-40">
                        <span>Latest Insights From Raxa</span>
                        <h2>Our Latest Articles</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="blog-card style1">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog-7.jpg" alt="Image">
                                </div>
                                <div class="blog-info">
                                    <h3><a href="blog-details-right-sidebar.php">What Consumer Expect From Commercial Loan</a></h3>
                                    <ul class="blog-metainfo  list-style">
                                        <li><i class="flaticon-user-1"></i> <a href="posts-by-author.php">Reanne Carnation</a></li>
                                        <li><i class="flaticon-calendar"></i>02 Jan, 2024</li>
                                    </ul>
                                    <p>It is a long established fact that lorem will be when looking as it sito.</p>
                                    <a href="blog-details-right-sidebar.php" class="link style1">Read More
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6" >
                            <div class="blog-card style1">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog-2.jpg" alt="Image">
                                </div>
                                <div class="blog-info">
                                    <h3><a href="blog-details-right-sidebar.php">NSI Bank Will Close Their ATM From Tomorrow</a></h3>
                                    <ul class="blog-metainfo  list-style">
                                        <li><i class="flaticon-user-1"></i> <a href="posts-by-author.php">Tony Stark</a></li>
                                        <li><i class="flaticon-calendar"></i>15 Dec, 2024</li>
                                    </ul>
                                    <p>It is a long established fact that lorem will be when looking as it sito.</p>
                                    <a href="blog-details-right-sidebar.php" class="link style1">Read More
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6" >
                            <div class="blog-card style1">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog-3.jpg" alt="Image">
                                </div>
                                <div class="blog-info">
                                    <h3><a href="blog-details-right-sidebar.php">The Fedaral Bank Appoints New Director To Board</a></h3>
                                    <ul class="blog-metainfo  list-style">
                                        <li><i class="flaticon-user-1"></i> <a href="posts-by-author.php">Phil Heath</a></li>
                                        <li><i class="flaticon-calendar"></i>12 Dec, 2024</li>
                                    </ul>
                                    <p>It is a long established fact that lorem will be when looking as it sito.</p>
                                    <a href="blog-details-right-sidebar.php" class="link style1">Read More
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Section End -->

            <!-- Footer Section Start -->
           <?php include_once "./include/footer.php"   ?>
            <!-- Footer Section End -->

        </div>
        <!-- Page Wrapper End -->
        
        <!-- Back-to-top button Start -->
         <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
        <!-- Back-to-top button End -->

        <!-- Link of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/fslightbox.js"></script>
        <script src="assets/js/tweenmax.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>


<!-- Mirrored from templates.hibootstrap.com/raxa/default/index-3.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 12:42:39 GMT -->
</html>