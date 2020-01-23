<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include("head.php")  ?>
</head>

<body>
<?php  include("body.php")  ?>
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="section" >

            <div>
                <form method="post" action="u_listing.php">

                    <form method="post" action="u_listing.php" enctype="multipart/form-data">
                        <table align="center" class="auto-style1" border="1">
                            <tr>
                                <th class="auto-style2">User Name :</th>
                                <th class="auto-style3">Surname :</th>
                                <th>Email :</th>

                            </tr>
                            <?php
                            include("setting.php");
                            $select=  "select  user_id,fname,lname,email from user ";
                            $r=mysqli_query($con,$select);
                            while($print = mysqli_fetch_assoc($r)) {
                                ?>
                                <tr>
                                    <td class="auto-style2"> <?php echo $print["fname"] ?> </td>
                                    <td class="auto-style3"> <?php echo $print["lname"] ?> </td>
                                    <td class="auto-style3"> <?php echo $print["email"] ?> </td>
                                    <td><a href ="date_point?id=<?php echo $print["user_id"] ?>"> Update </a> <p><a href="viewpoint.php?id=<?php echo $print["user_id"] ?>">Delete</a></p> </td>
                                </tr>
                            <?php } ?>
                        </table>

                </form>

            </div>

        </div>
    </div>
</div>
</body>
<?php  include("script.php")  ?>

</html>

