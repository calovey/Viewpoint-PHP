<?php
include('user_login.php');
if(isset($_SESSION['login_user'])){
    // header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Famagusta Viewpoints</title>

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Themefisher Font -->
    <link href="plugins/themefisher-font/style.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="plugins/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" media="screen">
    <!-- Owl Carousel Theme -->
    <link href="plugins/owl-carousel/assets/owl.theme.green.min.css" rel="stylesheet" media="screen">
    <!-- Fancy Box -->
    <link href="plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- FAVICON -->
    <link href="images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<section class="user-login section">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="height: 100px; width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="row">
            <div class="col-12">

                <div class="block">
                    <!-- Image -->

                    <div class="image align-self-center"><img src="navBG.jpg" style="width: 100%; height: 800px;"></div>

                    <!-- Content -->
                    <div class="content text-center">

                        <div class="logo">
                            <a href="homepage.html"><img src="images/logo.svg" alt=""></a>
                        </div>
                        <div class="title-text">
                            <h2>Sign In with your account</h2>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <!-- Username -->
                            <input class="form-control main" type="text" name="email" placeholder="E-mail" style="width: 400px;height: 40px"  required>
                            <!-- Password -->
                            <input class="form-control main" type="password" name="password" placeholder="Password" style="width: 400px;height: 40px" required>
                            <!-- Submit Button --><br>
                            <button type="submit" name="submit" class="btn btn-main-md">sign in</button>
                        </form>

                        <div class="new-acount">
                            <p>Don't Have an account? <a href="signup.php"> SIGN UP</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                <div class="block">
                    <a href="index.php"><img src="img/tp.jpg" alt="footer-logo"></a>
                    <!-- Social Site Icons -->
                    <ul class="social-icon list-inline">
                        <li class="list-inline-item">
                            <a href="#"><i class="tf-ion-social-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="tf-ion-social-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="tf-ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>

</footer>

<!-- JAVASCRIPTS -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

<script src="plugins/jquery/jquery.js"></script>
<script src="plugins/popper/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<script src="plugins/syotimer/jquery.syotimer.min.js"></script>

<script src="js/custom.js"></script>
</body>

</html>