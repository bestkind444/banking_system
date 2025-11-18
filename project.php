<?php
session_start();
include_once "./server/connection.php";
?>

<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from templates.hibootstrap.com/raxa/default/project.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 12:42:45 GMT -->

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
        <header class="header-wrap style1">
            <div class="header-top">
                <button type="button" class="close-sidebar">
                    <i class="ri-close-fill"></i>
                </button>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li><i class="flaticon-call"></i> <a href="tel:02459271449">(+024) 592 71 449</a></li>
                                    <li><i class="flaticon-email-1"></i> <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d3bbb6bfbfbc93a1b2abb2fdb0bcbe"><span class="__cf_email__" data-cfemail="96fef3fafaf9d6e4f7eef7b8f5f9fb">[email&#160;protected]</span></a></li>
                                    <li><i class="flaticon-pin"></i>
                                        <p>St. Here Mandalay, New York, U.K</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="header-top-right">
                                <ul class="header-top-menu list-style">
                                    <li><a href="contact.php">Support</a></li>
                                    <li><a href="contact.php">Help</a></li>
                                </ul>
                                <div class="select-lang">
                                    <i class="ri-global-line"></i>
                                    <div class="navbar-option-item navbar-language dropdown language-option">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="lang-name"></span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/uk.png" alt="flag">
                                                English
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/china.png" alt="flag">
                                                简体中文
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/uae.png" alt="flag">
                                                العربيّة
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index-2.php">
                            <img class="logo-light" src="assets/img/logo.png" alt="logo">
                            <img class="logo-dark" src="assets/img/logo-white.png" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close xl-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item  has-dropdown">
                                    <a href="#" class="nav-link">
                                        Home
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index-2.php" class="nav-link">Home One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.php" class="nav-link ">Home Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-4.php" class="nav-link">Home Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item has-dropdown">
                                    <a href="#" class="nav-link">
                                        Service
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="service-one.php" class="nav-link">Service One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-two.php" class="nav-link">Service Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.php" class="nav-link">Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-dropdown">
                                    <a href="#" class="nav-link active">
                                        Pages
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active">
                                                Project
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="project.php" class="nav-link active">Our Project</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="project-details.php" class="nav-link">Single Project</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.php" class="nav-link">Our Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="open-account.php" class="nav-link">Open Account</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apply-loan.php" class="nav-link">Apply Loan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pricing.php" class="nav-link">Pricing Plan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.php" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.php" class="nav-link">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                User Pages
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="my-account.php" class="nav-link">My Account</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="login.php" class="nav-link">Login</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="register.php" class="nav-link">Register</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="recover-password.php" class="nav-link">Recover Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-of-service.php" class="nav-link">Terms of Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="error-404.php" class="nav-link">404 Error Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-dropdown">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Blog Layout
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog-no-sidebar.php" class="nav-link">Blog Grid</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-left-sidebar.php" class="nav-link">Blog Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-right-sidebar.php" class="nav-link">Blog Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Single Blog
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog-details-no-sidebar.php" class="nav-link">Blog Details No Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-details-left-sidebar.php" class="nav-link">Blog Details Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-details-right-sidebar.php" class="nav-link">Blog Details Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact Us</a>
                                </li>
                                <li class="nav-item xl-none">
                                    <a href="register.php" class="btn style1">Register Now</a>
                                </li>
                            </ul>
                            <div class="others-options  lg-none">
                                <div class="searchbox">
                                    <input type="search" placeholder="Search">
                                    <button type="button">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </div>
                                <div class="header-btn lg-none">
                                    <a href="register.php" class="btn style1">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="mobile-bar-wrap">
                        <div class="mobile-sidebar">
                            <i class="ri-menu-4-line"></i>
                        </div>
                        <button class="searchbtn xl-none" type="button">
                            <i class="flaticon-search"></i>
                        </button>
                        <div class="mobile-menu xl-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="search-area">
                    <div class="container">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here" autofocus>
                            </div>
                        </form>
                        <button type="button" class="close-searchbox">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Content Wrapper Start -->
        <style>
            .container-div {
                background-color: green;
                height: 200px;
                font-weight: 600;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
        <div class="content-wrapper">
            <div class="container-div">

                <?php
                $id = $_SESSION['user_id'];

                $sql = "SELECT balance FROM users WHERE id =  $id";
                $statement = mysqli_query($connection, $sql); ?>

                <?php if (mysqli_num_rows($statement) > 0) {
                    $user_balance = mysqli_fetch_assoc($statement);
                }

                ?>


                <p>Available balance:  ₦<?= $user_balance["balance"] ?> </p>
            </div>



        </div>
        <!-- Content Wrapper End -->


        <!-- Footer Section Start -->
        <footer class="footer-wrap bg-rock">
            <div class="container">
                <img src="assets/img/footer-shape-1.png" alt="Image" class="footer-shape-one">
                <img src="assets/img/footer-shape-2.png" alt="Image" class="footer-shape-two">
                <div class="row pt-100 pb-75">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <a href="index-2.php" class="footer-logo">
                                <img src="assets/img/logo-white.png" alt="Image">
                            </a>
                            <p class="comp-desc">
                                On the other hand, we denounce whteous indig nation and dislike men wh beguiled moraized er hand consec teturus adipis iscing elit eiusmod tempordunt labore dolore magna aliqua consector tetur adip iscing.
                            </p>
                            <div class="social-link">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Our Company</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="about.php">
                                        <i class="flaticon-next"></i>
                                        Company &amp; Team
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.php">
                                        <i class="flaticon-next"></i>
                                        Our Services
                                    </a>
                                </li>
                                <li>
                                    <a href="team.php">
                                        <i class="flaticon-next"></i>
                                        News &amp; Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.php">
                                        <i class="flaticon-next"></i>
                                        Pricing Plan
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.php">
                                        <i class="flaticon-next"></i>
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.php">
                                        <i class="flaticon-next"></i>
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Products</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="service-one.php">
                                        <i class="flaticon-next"></i>
                                        Online Payment
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.php">
                                        <i class="flaticon-next"></i>
                                        Deposit Skim
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.php">
                                        <i class="flaticon-next"></i>
                                        Online Shopping
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.php">
                                        <i class="flaticon-next"></i>
                                        Master Card
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.php">
                                        <i class="flaticon-next"></i>
                                        Receive Money
                                    </a>
                                </li>
                                <li>
                                    <a href="service-one.php">
                                        <i class="flaticon-next"></i>
                                        Affiliate Program
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Subscribe</h3>
                            <p class="newsletter-text">Tablished fact that a reader will be distrated by the readable content</p>
                            <form action="#" class="newsletter-form">
                                <input type="email" placeholder="Your Email">
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p> <i class="ri-copyright-line"></i> Raxa. All Rights Reserved By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
            </div>
        </footer>
        <!-- Footer Section End -->

    </div>
    <!-- Page Wrapper End -->

    <!-- Back-to-top button Start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
    <!-- Back-to-top button End -->

    <!-- Link of JS files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
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


<!-- Mirrored from templates.hibootstrap.com/raxa/default/project.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 12:42:52 GMT -->

</html>