<?php
include "admin.php";
$obj=new admin();

if(isset($_POST["btn_submit"]))
{
    $msg=$obj->set_showTime($_POST);
    echo $msg;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="container-fluid col-sm-8 col-sm-offset-2">
    <div class="panel panel-primary" style="margin-top: 30px">
        <div class="panel panel-heading"><h2 style="text-align: center">SET SHOWTIME BY MOVIE</h2></div>
        <div class="panel panel-body">
            <form method="post" action="">
                <div class="form-group">
                    <lebel for="email">MOVIE NAME:</lebel>
                    <input type="text" class="form-control" name="movie_name" placeholder="Enter the Movie name">
                </div>
                <div class="form-group">
                    <lebel for="moviePoster">SET DATE:</lebel>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <lebel for="trailer">Movie SHOW NO:1:</lebel>
                    <input type="time" class="form-control" name="show1">
                </div>
                <div class="form-group">
                    <lebel for="trailer">Movie SHOW NO:2:</lebel>
                    <input type="time" class="form-control" name="show2">
                </div>
                <div class="form-group">
                    <lebel for="trailer">Movie SHOW NO:3:</lebel>
                    <input type="time" class="form-control" name="show3">
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="btn_submit">SUBMIT</button>
            </form>
        </div>

    </div>

</div>
</body>
</html>