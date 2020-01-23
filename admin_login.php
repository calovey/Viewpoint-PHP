<?php
include("setting.php");
session_start();
extract($_POST);
if(isset($_POST['submit']))
{
       /* $myusername = mysqli_real_escape_string($con,$_POST['username']);
    $mypassword = mysqli_real_escape_string($con,$_POST['password']);*/

    $sql = "SELECT username,password FROM admin WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($row > 0) {

        $_SESSION['login_user'] = $username;

        header("location: dashboard.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #e22ef4;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #e22ef4;
        }

        .imgcontainer {
            text-align: center;
            margin: 10px 0 12px 0;
        }

        img.avatar {
            width: 10%;
            border-radius: 10%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<h2>Admin Login</h2>

<form enctype="multipart/form-data" method="post">
    <center>
    <div class="imgcontainer">
        <img src="img\indir.png" alt="Avatar" class="avatar">
    </div>

    <br class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username"  required></br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required></br>

        <button type="submit" name="submit" >Login</button></br>
        <label>
            <input type="checkbox"  name="remember" value="submit"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn" value="cancel">Cancel</button>
    </div>
</center>

</form>

</body>
</html>