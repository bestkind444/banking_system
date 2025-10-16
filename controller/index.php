<?php 
session_start();
include "../server/connection.php";

if($_SERVER['REQUEST_METHOD'] === "POST") {
$admin_name = $_POST['name'];
$password = $_POST['password'];

if (!$admin_name  || !$password ) {
echo "<script>alert('empty inputs'); location.href = './'</script>";
die();
   
}


$statement = mysqli_query($connection, "SELECT * FROM admin WHERE adminName = '$admin_name'");

if (mysqli_num_rows($statement) > 0) {
    $admin = mysqli_fetch_assoc($statement);
   $_SESSION['admin'] = $admin['id'];
   echo "<script>alert('login successfull'); location.href = './dashbord/'</script>";

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
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/flaticon.css">
        <link rel="stylesheet" href="../assets/css/remixicon.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/odometer.min.css">
        <link rel="stylesheet" href="../assets/css/aos.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/dark-theme.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <title>Raxa - Money Transfer & Online Banking HTML Template</title>
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
        
     

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

             

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
                                                        <input id="text" name="name" type="text"  placeholder="Admin" >
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


        

        </div>
        <!-- Page Wrapper End -->
        
        <!-- Back-to-top button Start -->
         <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
        <!-- Back-to-top button End -->

       <!-- Link of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/form-validator.min.js"></script>
        <script src="../assets/js/contact-form-script.js"></script>
        <script src="../assets/js/aos.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.appear.js"></script>
        <script src="../assets/js/odometer.min.js"></script>
        <script src="../assets/js/fslightbox.js"></script>
        <script src="../assets/js/tweenmax.min.js"></script>
        <script src="../assets/js/main.js"></script>
    </body>


<!-- Mirrored from templates.hibootstrap.com/raxa/default/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Oct 2025 12:42:58 GMT -->
</html>