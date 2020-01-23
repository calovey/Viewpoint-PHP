<?php
include "setting.php";
session_start();
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT email, password from user where email=? AND password=? ";

        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt->bind_result($email, $password);
        $stmt->store_result();
        if($stmt->fetch()){
            $_SESSION['login_user'] = $email;
            header("location: index.php");}
        else{
            $error = "Username or Password is invalid";
        }
    }
    mysqli_close($con);
}
?>