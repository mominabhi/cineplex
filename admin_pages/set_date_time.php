<?php
include "admin.php";
$obj=new admin();

if (isset($_POST['submit_date'])) {
    $result=$obj->dates($_POST);
    echo $result;
}
if(isset($_POST['submit_time']))
{
    $result=$obj->showtimes($_POST);
    echo $result;
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
<div class="container">
    <div class="col-sm-4 col-sm-offset-2">
        <div class="panel panel-primary " style="margin-top: 30px">
            <div class="panel panel-heading"><h2 style="text-align: center">Set Scheduling Date</h2></div>
            <div class="panel panel-body">
                <form method="post" action="">
                    <div class="form-group">
                        <lebel for="moviePoster">SET DATE:</lebel>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit_date">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-primary" style="margin-top: 30px">
            <div class="panel panel-heading"><h2 style="text-align: center">Set Daily Showtime</h2></div>
            <div class="panel panel-body">
                <form method="post" action="">
                    <div class="form-group">
                        <lebel for="moviePoster">SET SHOWTIME:</lebel>
                        <input type="time" class="form-control" name="showtime">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit_time">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
