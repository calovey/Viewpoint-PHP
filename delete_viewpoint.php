<?php
include 'setting.php';
$lid=$_REQUEST['id'];

$q="delete from location  where  loc_id='$lid'";
$r=mysqli_query($con,$q) or die('Query failed. '.mysqli_error($con));

header("location:list_view.php");
mysqli_close($con);
?>