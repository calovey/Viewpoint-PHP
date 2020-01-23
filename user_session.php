<?php

include "setting.php";
session_start();// Starting Session

if(isset($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];
    $query = "SELECT user_id,fname from user where email = '$user_check'";
    $ses_sql = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['fname'];
    $login_session_id=$row['user_id'];
}
else {
    $login_session = "";
    $login_session_id="";
}

?>