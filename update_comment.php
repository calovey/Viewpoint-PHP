<?php
extract($_POST);
$cid=$_REQUEST['id'];
include 'setting.php';

$select=  "select  * from comment c,user u where comment_id='$cid'  ";
$r=mysqli_query($con,$select);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
if($row['permission']=='0')
{
    $qu="update comment set permission='1' where comment_id='$cid'";
    $ru=mysqli_query($con,$qu) or die('Query failed. '.mysqli_error($con));
}
else{
    $qu="update comment set permission='0' where comment_id='$cid'";
    $ru=mysqli_query($con,$qu) or die('Query failed. '.mysqli_error($con));
}

header("location:comments.php");
mysqli_close($con);
?>