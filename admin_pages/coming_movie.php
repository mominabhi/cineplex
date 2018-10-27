<?php
include "admin.php";
$obj=new admin();


if(isset($_POST["btn_submit"]))
{
    $msg=$obj->coming_movie_post($_POST);
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
<div class="container-fluid">
    <div class="col-sm-2">
        <?php include "adminPanel.php";?>
    </div>
    <div class="col-sm-8">
        <div class="panel panel-default" style="margin-top: 10px">
            <div class="panel panel-heading"><h2 style="text-align: center">Coming Movie Post</h2></div>
            <div class="panel panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <lebel for="movie_name">Movie Name:</lebel>
                        <input type="text" class="form-control" name="movie_name" placeholder="Enter the Movie name">
                    </div>
                    <div class="form-group">
                        <lebel for="ShowDate"> Release Date:</lebel>
                        <input type="date" class="form-control" name="release_date">
                    </div>
                    <div class="form-group">
                        <lebel for="movieImage">Movie Poster:</lebel>
                        <input type="file" class="form-control" name="movie_image">
                    </div>
                    <div class="form-group">
                        <lebel for="trailer">Movie Trailer:</lebel>
                        <input type="text" class="form-control" name="trailer" placeholder="Enter Trailer Link">
                    </div>
                    <div class="form-group">
                        <lebel for="Synopsis">Synopsis:</lebel>
                        <textarea class="form-control" name="synopsis"></textarea>
                    </div>
                    <div class="form-group">
                        <lebel for="rating">Movie Rating:</lebel>
                        <input type="number" class="form-control" name="rating">
                    </div>
                    <div class="form-group">
                        <lebel for="director">Movie Director:</lebel>
                        <input type="text" class="form-control" name="director" placeholder="Enter Director Name">
                    </div>
                    <div class="form-group">
                        <lebel for="cast">Movie Cast:</lebel>
                        <input type="text" class="form-control" name="cast" placeholder="Enter Cast names">
                    </div>
                    <div class="form-group">
                        <lebel for="genre">Movie Genre:</lebel>
                        <input type="text" class="form-control" name="genre" placeholder="Enter Movie Genre">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="btn_submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
