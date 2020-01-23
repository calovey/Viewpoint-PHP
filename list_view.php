<!DOCTYPE html>
<html lang="en">


<head>
    <?php  include("head.php")  ?>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
            border-style: solid;
            border-width: 0px;
        }
        .auto-style2 {
            width: 339px;
        }
        .auto-style3 {
            width: 558px;
        }
    </style>
</head>

<body>
<?php  include("body.php")  ?>
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="section" >

            <div>
                <form method="post" action="listing.php" enctype="multipart/form-data">
                    <table align="center" class="auto-style1" border="1">
                        <tr>
                            <th class="auto-style2">Viewpoint Name:</th>
                            <th class="auto-style3">Description:</th>
                            <th>Picture:</th>
                        </tr>
                        <?php
                        include("setting.php");
                        $select=  "select  loc_id,loc_name,desc1,image from location where visible = 1 order by loc_id asc ";
                        $r=mysqli_query($con,$select);
                        while($print = mysqli_fetch_assoc($r)) {
                        ?>
                        <tr>
                            <td class="auto-style2"> <?php echo $print["loc_name"] ?> </td>
                            <td class="auto-style3"> <?php echo $print["desc1"] ?> </td>
                            <td class="auto-style3"> <?php echo $print["image"] ?> </td>
                            <td><a href ="list_update_point?id=<?php echo $print["loc_id"] ?>"> Update </a> <p><a href="delete_viewpoint.php?id=<?php echo $print["loc_id"] ?>">Delete</a></p> </td>
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

