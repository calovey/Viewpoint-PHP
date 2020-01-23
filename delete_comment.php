<?php
include 'setting.php';
$cid=$_REQUEST['id'];

$q="delete from comment  where  comment_id='$cid'";
$r=mysqli_query($con,$q) or die('Query failed. '.mysqli_error($con));

header("location:comments.php");
mysqli_close($con);
?>