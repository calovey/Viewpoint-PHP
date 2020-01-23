<?php
include('user_session.php');
if(!isset($_SESSION['login_user'])){
    // header("location: admin_login.php"); // Redirecting To Home Page
    echo "";
}
?>
<?php
echo $login_session;
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="cardstyle.css">

    <link rel="stylesheet" href="Homepagestyle.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


<div class="divstyle33">
    <header>


        <div class="divstyle">

            <div class="dropdown" style="padding-top:1% ;">



                <button style="color: white;" class="dropbtn">
                    User

                </button>
                <div class="dropdown-content">
                    <a href="signup.php">Signup</a>
                    <a href="login.php">Login</a>
                    <?php
                    if($login_session==""){

                    }
                    else{
                        echo '<a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>';
                    }
                    ?>
                </div>


            </div>
            <i class="fa fa-facebook" style="color: white; padding-left: 74%; "></i>
            <i class="fa fa-twitter" style="color: white; padding-left: 15px;"></i>
            <i class="fa fa-instagram" style="color: white;  padding-left: 15px; padding-right: 7px;"></i>
    </header>

    <img src="logo.png" alt="LOGO" width="180px" style=" padding-left: 5%;">
    <P style="position: absolute;
                Top:70%;
                font-size: 48px;
                padding: 2%;
                background-color:#afa9399c;
    color: #fff;
    line-height: 1.5;
    font-weight: 700;
                right: 40%;">FAMAGUSTA</P>
    <p style="position: absolute;
               Top:92%;
               font-size: 16px;
   color: #fff;
   line-height: 1.5;
   font-weight: 700; background-color:#afa9399c;
               right: 47%;"> <a href="index.php" style="color: white;"> Home </a> > -</p>
</div>
<div class="ppp" >
    <?php

    include "setting.php";
    $query="select * from location_en";
    $result=mysqli_query($con,$query);
               while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card" style="width:170px;  height=220px;">';
                echo '<img src="image/' . $row["image_en"] . '" style="width:170px; height:180px;" >';
                echo '<div class="container">';
                echo '<a href="viewpointdetail.php?lid=' . $row['loc_id_en'] . '" style="color: white;">' . $row["loc_name_en"] . '</a>';
                echo '<a href="#" style=""> Add/ReadComment</a>';
                echo '<input type="checkbox" disabled="disabled">Visited';
                echo '</div></div></br>';
        }
        mysqli_close($con);

    ?>

    $num=mysql_num_rows($query);
    $count=0;
    while($count < $num){
</div>

<br><br>
<footer>
    <div class="divstyle1">

        <i class="fa fa-facebook" style="color: white; padding-left:15px; padding-top: 25px;"></i>
        <i class="fa fa-twitter" style="color: white;padding-left:15px; padding-top: 25px;"></i>
        <i class="fa fa-instagram" style="color: white;padding-left:15px;padding-right:5px; padding-top: 25px;"></i>
        <button onclick="topFunction()" id="myBtn" class="totop" title="Go to top">
            <i class="fa fa-arrow-up" aria-hidden="true" style="color: white; font-size: 18px;"></i></button>
    </div>

    <script src="ToTopbutton.js"></script>


</footer>

</body>
</html>