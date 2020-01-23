<!DOCTYPE html>
<html lang="en">


<head>
    <?php  include("head.php")  ?>

</head>

<body>
      <?php  include("body.php")  ?>
        <!-- End Navbar -->
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
              $add = "insert into location (loc_name , desc1 , image,visible ) values ('$loc_name','$desc','$file',1)";
              $ru = mysqli_query($con, $add) or die('Query failed. ' . mysqli_error($con));
              echo '<script>alert("New Viewpoint Added");</script>';
          }
          else{
              echo '<script>alert("Please Fill All the Part");</script>';          }

      }


      ?>

        <div class="content">
            <div class="container-fluid">
                <div class="section" >

                    <div>
                        <form method="post" enctype="multipart/form-data" >
                        <table>
                            <tr>
                                <td class="auto-style3">
                                    Location Name :
                                </td>
                                <td class="auto-style4">
                                    <input type="loc_name" class="auto-style1" name="loc_name" >
                                </td>
                            </tr>
                            <tr>
                                <td class="auto-style2">
                                    Description :
                                </td>
                                <td class="auto-style5">
                                    <textarea class="form-control" name="desc" rows="50" cols="40" placeholder="Enter Description..."></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Picture :
                                </td>
                                <td>
                                    <input type="file" name="file" /><br />

                                </td>
                            </tr>
                          <tr>

                              <td></td>
                              <td>
                            <br><input type="submit" name="submit" value="Submit" />
                              </td>
                          </tr>
                        </table>
                        </form>

                    </div>

                </div>
            </div>
        </div>
</body>
     <?php  include("script.php")  ?>

</html>
