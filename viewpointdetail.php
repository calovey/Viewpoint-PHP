<?php
include('user_session.php');
if(!isset($_SESSION['login_user'])){
    // header("location: admin_login.php"); // Redirecting To Home Page
    echo "";
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

<nav class="navbar main-nav navbar-expand-lg p-0">
    <form method="post" enctype="multipart/form-data">
        <select name="langu" style="width: 90px;" onchange="this.form.submit();">
            <?php
            function get_options()
            {
                include "setting.php";
                echo '<option value="0"> <a href="index.php?lang=en">English</a></option>';
                echo '<option value="1"> <a href="index.php?lang=tr">Türkçe</a></option>';

            }
            echo get_options(); ?>
        </select>
    </form>
    <div class="container">

        <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="height: 100px; width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="tf-ion-android-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown active dropdown-slide">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown dropdown-slide">
                    <a class="nav-link" href="#"  data-toggle="dropdown">User
                        <span><i class="tf-ion-ios-arrow-down"></i></span>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="signup.php">Sign Up</a>
                        <?php
                        if($login_session==""){

                        }
                        else{
                            echo '<a class="dropdown-item" href="logout.php">Logout</a>';
                        }
                        ?>
                    </div>
                </li>

                <?php
                echo $login_session;
                ?>

            </ul>
        </div>
    </div>
</nav>

<section class="section cta-hire bg-gary" style="margin-top:-150px; ">
    <img src="hus.jpg" style="width: 100%; height: 600px;">
</section>


<section class="section page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <?php
                    $info=$_REQUEST["lid"];
                    include "setting.php";
                    $query="select * from location where loc_id='$info'";
                    $result=mysqli_query($con,$query);
                    $row=mysqli_fetch_assoc($result);

                    echo '<img src="image/'.$row["image"].'" style="width:500px; height:250px; " >';
                    echo ' <h1>'.$row['loc_name'].'</h1>';
                    echo '  <p>'.$row['desc1'].'</p>';

                    mysqli_close($con);
                ?>
            </div>
        </div>
    </div>
</section>
<center>
<h2>COMMENTS</h2></center>
<?php
include("setting.php");

$select=  "select  fname,lname,comment_text,comment_date from comment c,user u where c.user_id=u.user_id and permission='1'  ";
$r=mysqli_query($con,$select);
while($print = mysqli_fetch_assoc($r)) {
    ?>
<section class="section page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <h5><?php echo $print["fname"]; echo $print["lname"]; ?></h5>
                <h6><?php echo $print["comment_text"]; ?></h6>
                <h6><?php echo $print["comment_date"]; ?></h6>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<section class="section page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">

                    <form enctype="multipart/form-data" method="post">
                        <div class="commentsection">
                            <table>
                                <tr>
                                    <th>Add Your Comment : </th>
                                    <td><textarea class="comment" type="text" name="comment" rows="5" cols="50" ></textarea></td>
                                    <td><input type="submit" name="sbmtcomment" Value="Send" class="Btn1" ></td>
                                </tr>
                            </table>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>




<?php
$lid=$_REQUEST['lid'];
extract($_POST);
include "setting.php";
if(isset($_POST['sbmtcomment'])) {
    if($login_session_id=="")
    {
        echo '<script>alert("First you need to sign in");</script>';
    }
    else{
        $query1 = "insert into comment (loc_id,user_id,comment_text)values('$lid','$login_session_id','$comment')";
        $r = mysqli_query($con, $query1);
        echo '<script>alert("Comment Added");</script>';
    }
}
?>


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