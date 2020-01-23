<?php
extract($_POST);
include ("setting.php");


    if(isset($_POST['submit'])){

        $file=$_FILES["file"]["name"];
        $tmp_name=$_FILES["file"]["tmp_name"];

        $path="image/".$file;
        $file1=explode(".",$file);
        $ext=$file1[1];

        $allowed=array("jpg","jpeg","png","gif","pdf","wmv");

        if(in_array($ext,$allowed))
        {
            move_uploaded_file($tmp_name,$path);
            $add = "insert into location (loc_name , desc1 , image,visible ) values ('$point_name','$detail','$file',1)";
            $ru = mysqli_query($con, $add) or die('Query failed. ' . mysqli_error($con));
            echo '<span style="color:green; font-size: medium;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Product Added</span>';
        }
        else{
            echo '<span style="color:red; font-size: medium;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please fill all necessary box.</span>';
        }

    }

?>

