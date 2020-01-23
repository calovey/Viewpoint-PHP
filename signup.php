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



<!--=============================
=            Sign Up            =
==============================-->

<section class="user-login section">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo" style="height: 100px; width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
    <div class="container">
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
                            <h2>Sign Up for New Account</h2>
                        </div>
                        <form enctype="multipart/form-data" method="post">
                            <p>  <label for="fname">First Name</label>
                                <input class="form-control main" type="text" placeholder="..." name="fname" required></p>
                            <p> <label for="lname">Last Name</label>
                                <input class="form-control main" type="text" placeholder="..." name="lname" required></p>
                            <p> <label for="email">E-mail</label>
                                <input class="form-control main" type="text" placeholder="example@email.com" name="email" required></p>
                            <p><label for="nationality">Nationality</label>
                                <select style="width: 480px; height: 45px;" name="nationality" required>
                                    <option> Select one... </option>
                                    <?php
                                    function country()
                                    {
                                        include ("setting.php");
                                        $q = "select * from nationality";
                                        $r = mysqli_query($con, $q);

                                        if (mysqli_num_rows($r) > 0) {
                                            while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                                                echo '<option value="'.$row['nat_id'].'">' . $row['country'] . '</option>';
                                            }
                                        }
                                        mysqli_free_result($r);
                                        mysqli_close($con);
                                    }
                                    echo country();
                                    ?>
                                </select></p>

                            <p> <label for="password">Password</label>
                                <input class="form-control main" type="password" name="password"  required></p>
                            <p><input type="submit" name="submit" value="Submit" class="btn btn-main-md" /></p>
                        </form>
                        <?php
                        include ("setting.php");
                        extract($_POST);

                        if(isset($_POST['submit'])) {
                            $user_check_query = "SELECT * FROM user WHERE email='$email' OR password='$password' ";
                            $result = mysqli_query($con, $user_check_query);
                            $user = mysqli_fetch_assoc($result);

                            if ($user) {
                                if ($user['email'] === $email) {
                                    array_push($errors, "Email already exists");
                                }
                            } else {
                                $query = "INSERT INTO user (fname,lname, email,nat_id, password) VALUES ('$fname','$lname','$email', '$nationality','$password')";
                                mysqli_query($con, $query);
                                echo '<script>alert("Registration Successfully");</script>';

                            }
                        }
                        ?>
                        <div class="new-acount">
                            <div class="new-acount">
                                <p>Already have an account?  <a href="login.php">SIGN IN</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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