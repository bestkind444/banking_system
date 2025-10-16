<?php 
include_once "./server/connection.php";
// if (session_start() === PHP_SESSION_NONE) {
//    session_start();
// }
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
   $fullName_email = trim($_POST['email_name']  ?? "");
   $password = trim($_POST['password']  ?? "");

   
if (empty($fullName_email) || empty($password)) {
    echo "<script>alert('inputs cannot be empty')
     location.href = './login.php'
    </script>";
    exit;
}


$sql = "SELECT * FROM users WHERE fullName = '$fullName_email' OR  email = '$fullName_email'";
$statement = mysqli_query($connection, $sql);

if (mysqli_num_rows($statement)> 0) {
$users = mysqli_fetch_assoc($statement);

if (password_verify($password, $users['pswd'])) {
    if ($users['user_status'] === "inactive") {
    echo "<script>alert('you have been banned')
     location.href = './login.php'
    </script>";
    exit;
}

  $_SESSION['user_id'] = $users['id'];
  echo "<script>alert('login successfull')
     location.href = './index-4.php'
    </script>";
}else{
      echo "<script>alert('inavlid cresidencial')
     location.href = './login.php'
    </script>";
    exit;
}






    
}







}






?>


<!DOCTYPE html>
<html lang="zxx">

    
<!-- Mirrored from templates.hibootstrap.com/raxa/default/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 12:42:58 GMT -->
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

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap bg-spring">
                    <img src="assets/img/breadcrumb/br-shape-1.png" alt="Image" class="br-shape-one xs-none">
                    <img src="assets/img/breadcrumb/br-shape-2.png" alt="Image" class="br-shape-two xs-none">
                    <img src="assets/img/breadcrumb/br-shape-3.png" alt="Image" class="br-shape-three moveHorizontal sm-none">
                    <img src="assets/img/breadcrumb/br-shape-4.png" alt="Image" class="br-shape-four moveVertical sm-none">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 col-sm-8">
                                <div class="breadcrumb-title">
                                    <h2>Login</h2>
                                    <ul class="breadcrumb-menu list-style">
                                        <li><a href="index-2.php">Home </a></li>
                                        <li>Login</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                                <div class="breadcrumb-img">
                                    <img src="assets/img/breadcrumb/br-shape-5.png" alt="Image" class="br-shape-five animationFramesTwo">
                                    <img src="assets/img/breadcrumb/br-shape-6.png" alt="Image" class="br-shape-six bounce">
                                    <img src="assets/img/breadcrumb/breadcrumb-3.png" alt="Image">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Breadcrumb End -->

               <!-- Account Section start -->
               <section class="Login-wrap ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="login-form-wrap">
                                <div class="login-header">
                                    <h3>Login Here</h3>
                                    <p>Welcome Back!! Login To Your Account</p>
                                </div>
                                <div class="login-form">
                                    <div class="login-body">
                                        <form class="form-wrap" action="#" method="post">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="text" name="email_name" type="text"  placeholder="Username Or Email Address" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input id="pwd" name="password" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="checkbox style3">
                                                        <input type="checkbox" id="test_1">
                                                        <label for="test_1">
                                                            Remember Me</a>
                                                        </label>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
                                                    <a href="recover-password.php" class="link style1">Forgot Password?</a>
                                                </div> -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn style1">
                                                            Login Now
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <p class="mb-0">Don’t Have an Account? <a class="link style1" href="register.php">Create One</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Account Section end -->

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


<!-- Mirrored from templates.hibootstrap.com/raxa/default/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 12:42:58 GMT -->
</html>