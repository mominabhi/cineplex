<?php
session_start();
if(isset($_SESSION['admin_id']))
{
    header("Location:adminPanel.php");
}
include "admin.php";
$obj=new admin();
if(isset($_POST['admin_login']))
{
    $obj->admin_login($_POST);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="container col-sm-6 col-sm-offset-3">
    <div class="panel panel-info" style="margin:10px">
        <div class="panel panel-heading ">
           <h3 style="text-align: center">Admin Login</h3>
        </div>
        <div class="panel panel-body">
            <form method="post" action="">
                <input type="text" class="form-control" name="admin_email" placeholder="Email">
                <br>
                <input type="text" class="form-control" name="admin_pass" placeholder="Password">
                <br>
                <input type="submit" class="form-control btn btn-primary" name="admin_login" value="Sign in">
            </form>
        </div>
    </div>
</div>
</body>
</html>
