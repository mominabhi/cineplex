<?php
include "admin.php";
include "../header.php";
$obj=new admin();


if(isset($_POST["btn_submit"]))
{
    $msg=$obj->movie_post($_POST);
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
        <div class="panel panel-heading"><h2 style="text-align: center">Movie Post</h2></div>
        <div class="panel panel-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <lebel for="email">Movie Name:</lebel>
                    <input type="text" class="form-control" name="movie_name" placeholder="Enter the Movie name">
                </div>
                <div class="form-group">
                    <lebel for="ShowDate">Showing Date:</lebel>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <lebel for="showTime1">Show Time 1:</lebel>
                    <input type="time" class="form-control" name="show_time_1">
                </div>
                <div class="form-group">
                    <lebel for="showTime2">Show Time 2:</lebel>
                    <input type="time" class="form-control" name="show_time_2">
                </div>
                <div class="form-group">
                    <lebel for="showTime3">Show Time 3:</lebel>
                    <input type="time" class="form-control" name="show_time_3">
                </div>

                <div class="form-group">
                    <lebel for="moviePoster">Movie Poster:</lebel>
                    <input type="file" class="form-control" name="poster">
                </div>
                <div class="form-group">
                    <lebel for="trailer">Movie Trailer:</lebel>
                    <input type="text" class="form-control" name="trailer" placeholder="Enter Trailer Link">
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="btn_submit">SUBMIT</button>
            </form>
        </div>

    </div>

</div>
</body>
</html>