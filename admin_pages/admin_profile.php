<?php
include "admin.php";
$obj=new admin();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-3">
        <?php include "adminPanel.php"; ?>
    </div>
    <div class="col-sm-7" style="margin-top: 10px">
        <div class="panel panel-info">
            <div class="panel panel-heading">
                <h3 style="text-align:center">Admin Profile</h3>
            </div>
            <div class="panel panel-body">
                <table class="table table-bordered">
                    <tbody>

                        <?php
                        $result=$obj->admin_profile($_SESSION['admin_id']);
                        foreach ($result as $row)
                        {
                            ?>
                            <tr>

                                <td><h4 style="text-align: center">Admin Name:</h4></td>
                                <td><h4 style="text-align: center"><?php echo $row['name']; ?></h4></td>
                            </tr>
                            <tr>
                            <td><h4 style="text-align: center">Admin Email:</h4></td>
                            <td><h4 style="text-align: center"><?php  echo $row['email']; ?></h4></td>
                            </tr>
                            <tr>
                                <td><h4 style="text-align: center">Admin Password:</h4></td>
                                <td><h4 style="text-align: center"><?php echo $row['password']; ?></h4></td>
                            </tr>
                            <tr>
                                <td><h4 style="text-align: center">Mobile Number:</h4></td>
                                <td><h4 style="text-align: center"><?php  echo $row['number']; ?></h4></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
