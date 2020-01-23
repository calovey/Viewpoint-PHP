<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include("head.php")  ?>
</head>
<body>
<?php  include("body.php")  ?>
<div class="content">
    <div class="container-fluid">
        <div class="section" >

            <div>
                <form method="post" action="listing.php" enctype="multipart/form-data">
                    <table align="center" class="auto-style1" border="1">
                        <tr>
                            <th class="auto-style2">First Name </th>
                            <th class="auto-style3">Last Name </th>
                            <th class="auto-style3">Comments </th>
                            <th class="auto-style3">Date </th>

                        </tr>
                        <?php
                        include("setting.php");
                        $select=  "select  comment_id,fname,lname,comment_text,comment_date from comment c,user u where c.user_id=u.user_id  ";
                        $r=mysqli_query($con,$select);
                        while($print = mysqli_fetch_assoc($r)) {
                            ?>

                                <tr>
                                    <td class="auto-style2"> <?php echo $print["fname"] ?> </td>
                                    <td class="auto-style3"> <?php echo $print["lname"] ?> </td>
                                    <td class="auto-style3"> <?php echo $print["comment_text"] ?> </td>
                                    <td class="auto-style3"> <?php echo $print["comment_date"] ?> </td>
                                    <td><a href ="update_comment.php?id=<?php echo $print["comment_id"] ?>"> Approve </a> <p> <a href="delete_comment.php?id=<?php echo $print["comment_id"] ?>">Delete</a></p> </td>

                                </tr>

                        <?php } ?>

                    </table>
                </form>

            </div>

        </div>
    </div>
</div>
</body>
<!--   script file here   -->
<?php  include("script.php")  ?>

</html>
