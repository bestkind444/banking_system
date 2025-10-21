<?php
session_start();
include "../../server/connection.php";
if (!isset($_SESSION['admin'])) {
    header("location: ../index.php");
}



?>


<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link of CSS files -->
    <link rel="stylesheet" href="../../assets//css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets//css/flaticon.css">
    <link rel="stylesheet" href="../../assets//css/remixicon.css">
    <link rel="stylesheet" href="../../assets//css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets//css/odometer.min.css">
    <link rel="stylesheet" href="../../assets//css/aos.css">
    <link rel="stylesheet" href="../../assets//css/style.css">
    <link rel="stylesheet" href="../../assets//css/dark-theme.css">
    <link rel="stylesheet" href="../../assets//css/responsive.css">
    <title>Raxa - Money Transfer & Online Banking HTML Template</title>
    <link rel="icon" type="image/png" href="../../assets//img/favicon.png">
</head>

<body>

    <!--Preloader starts-->
    <!-- <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div> -->
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
                                    <li><i class="flaticon-email-1"></i> <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#5f373a3333301f2d3e273e713c3032"><span class="__cf_email__" data-cfemail="a8c0cdc4c4c7e8dac9d0c986cbc7c5">[email&#160;protected]</span></a></li>
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
                                                <img src="../../assets//img/uk.png" alt="flag">
                                                English
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="../../assets//img/china.png" alt="flag">
                                                简体中文
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="../../assets//img/uae.png" alt="flag">
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
                            <img class="logo-light" src="../../assets//img/logo.png" alt="logo">
                            <img class="logo-dark" src="../../assets//img/logo-white.png" alt="logo">
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
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Project
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="project.php" class="nav-link">Our Project</a>
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
                                    <a href="#" class="nav-link active">
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
                                            <a href="#" class="nav-link active">
                                                Single Blog
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="blog-details-no-sidebar.php" class="nav-link">Blog Details No Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-details-left-sidebar.php" class="nav-link ">Blog Details Left Sidebar</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="blog-details-right-sidebar.php" class="nav-link active">Blog Details Right Sidebar</a>
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

        <!-- Hero Section Start -->
        <section class="hero-wrap style1 bg-spring">
            <img src="../../assets//img/hero/hero-shape-1.png" alt="Image" class="hero-shape-one">
            <img src="../../assets//img/hero/hero-shape-2.png" alt="Image" class="hero-shape-two">
            <img src="../../assets//img/hero/hero-shape-3.png" alt="Image" class="hero-shape-three">
            <img src="../../assets//img/hero/hero-shape-4.png" alt="Image" class="hero-shape-four md-none">
            <div class="hero-slider-two owl-carousel">
                <div class="hero-slide-item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span>Simple. Transparent. Secure </span>
                                    <h1>Fast & Secure Online Money Transfer</h1>
                                    <p>Dea of denouncing pleasure and praising pain was born and lete system, and expound the ac teachings aitems to sed quia non numquam amet sit dolor.</p>
                                    <a href="service-one.php" class="btn style1">Get Started</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img-wrap">
                                    <img src="../../assets//img/hero/hero-slide-4.png" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="hero-slide-item">
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
                                        <img src="../../assets//img/hero/hero-slide-5.png" alt="Image">
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
                                        <img src="../../assets//img/hero/hero-slide-6.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </section>

        <style>
            table {
                color: white;
                width: 100%;


            }

            table,
            th,
            td {
                border: 1px solid white;

            }

            th,
            td {
                height: 70px;
                text-align: center;
            }

            th {
                text-transform: uppercase;
            }
        </style>


        <table>

            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Registered on</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php

                $sql = "SELECT * FROM users";
                $statement = mysqli_query($connection, $sql);

                if (mysqli_num_rows($statement) > 0) {
                    $count = 0;
                    while ($user = mysqli_fetch_assoc($statement)) {
                        $count++ ?>


                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $user['fullName']  ?></td>
                            <td><?php echo $user['email']  ?></td>
                            <td style="background-color:<?php echo $user['user_status'] === 'active' ? 'green' : 'red'  ?>"><?php echo $user['user_status']  ?></td>
                            <td><?php echo $user['time_registered']  ?></td>

                            <td>
                                <a style="background-color: green;padding:2px 7px;text-decoration:none;color:white;" href="enable.php?id=<?php echo $user['id']  ?>">Enable</a>
                                <a style="background-color:red;padding:2px 7px;text-decoration:none;color:white;" href="disable.php?id=<?php echo $user['id']  ?>">Disable</a>
                            </td>
                        </tr>

                <?php }
                }


                ?>





            </tbody>
















        </table>

        <br> <br> <br> <br>


        <center>
            <h1 style="color:white">LOAN TABLE</h1>
        </center>
        <table>

            <thead>
                <tr>
                    <th>S/N</th>
                    <th>user Name</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>phone number</th>
                    <th>date of birth</th>
                    <th>Gender</th>
                    <th> Marital status</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php

                $sql2 = "SELECT loan.* , users.id AS users,users.fullName,users.email FROM loan,users WHERE users.id = loan.user_id ";
                $state = mysqli_query($connection, $sql2);
                if (mysqli_num_rows($state)) {

                    $count = 0;

                    while ($loan = mysqli_fetch_assoc($state)) {
                        $count++ ?>



                        <tr>


                            <td><?= $count ?></td>
                            <td><?= $loan["full_name"] ?></td>
                            <td><?= $loan["fullName"] ?></td>
                            <td><?= $loan["email"] ?></td>
                            <td><?= $loan["phone_number"] ?></td>
                            <td><?= $loan["Date_Of_Birth"] ?></td>
                            <td><?= $loan["gender"] ?></td>
                            <td><?= $loan["Marital_Status"] ?></td>
                            <td style="background-color:<?= $loan["statue"] === 'approved' ? 'green' : 'red' ?>"><?= $loan["statue"] ?></td>
                            <td>
                                <a style="background-color: green;padding: 4px 7px;text-decoration: none;color: white;" href="approve.php?approve_id=<?= $loan["id"] ?>">Approved</a>
                                <a style="background-color: red;padding: 4px 7px;text-decoration: none;color:white;" href="decline.php?decline_id=<?= $loan["id"] ?>">Decline</a>
                            </td>
                        </tr>





                <?php }
                }









                ?>













            </tbody>

        </table>

        <br> <br> <br> <br> <br>




    </div>
    <!-- Page Wrapper End -->

    <!-- Back-to-top button Start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
    <!-- Back-to-top button End -->

    <!-- Link of JS files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../assets//js/jquery.min.js"></script>
    <script src="../../assets//js/bootstrap.bundle.min.js"></script>
    <script src="../../assets//js/form-validator.min.js"></script>
    <script src="../../assets//js/contact-form-script.js"></script>
    <script src="../../assets//js/aos.js"></script>
    <script src="../../assets//js/owl.carousel.min.js"></script>
    <script src="../../assets//js/jquery.appear.js"></script>
    <script src="../../assets//js/odometer.min.js"></script>
    <script src="../../assets//js/fslightbox.js"></script>
    <script src="../../assets//js/tweenmax.min.js"></script>
    <script src="../../assets//js/main.js"></script>
</body>


<!-- Mirrored from templates.hibootstrap.com/raxa/default/index-3.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 12:42:39 GMT -->

</html>