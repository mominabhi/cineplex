<?php
session_start();
$_SESSION['movie_id']=$_GET['movie_id'];

if(isset($_SESSION['user_id']))
{
    header("Location:buy_ticket.php");
}
include "classes/superClass.php";
$obj=new superClass();
if(isset($_POST['user_reg']))
{
    $obj->user_registration($_POST);
}
if(isset($_POST['user_login']))
{
    $obj->user_login($_POST);
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jQuery/jquery-3.3.1.min.js"></script>

    <style>
        body {
            background-image: url("image/d.jpg");
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="panel-info" style="margin:10px">
        <div class="panel panel-heading col-sm-12">
            <form method="post" action="">
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="user_email" placeholder="Email">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="user_pass" placeholder="Password">
                </div>
                <div class="col-sm-3">
                    <input type="submit" class="form-control btn btn-primary" name="user_login" value="Sign in">
                </div>
            </form>
        </div>
    </div>
    <div class="panel-info">
        <div class="panel panel-heading col-sm-6 col-sm-offset-3">
            <form method="post" action="">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="text" class="form-control" name="user_email" placeholder="Email">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="user_name" placeholder="Full Name">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="confirm_pass" placeholder=" Confirm Password">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                    <input type="text" class="form-control" name="phone_number" placeholder=" Phone Number">
                </div>
                <br>
                <input type="submit" class="form-control btn btn-warning" name="user_reg" value="Join Now">
            </form>
        </div>
    </div>
</div>
</body>
</html>
