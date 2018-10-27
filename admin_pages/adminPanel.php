<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
    header("Location:admin_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jQuery/jquery-3.3.1.min.js"></script>
    <style>
        .sidenav {
            height: 100%;
            width: 180px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color:  #eee;
            overflow-x: hidden;
            padding-top: 20px;
            margin-top: 10px;
        }
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;

            color: #3c3c3c;
            display: block;
        }
        .sidenav a:hover {
            color: #064579;
        }
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        .lulupapa{
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="sidenav">
    <a href="admin_profile.php"><button type="button" class="btn btn-block lulupapa"><?php echo $_SESSION['admin_name'];?></button></a>
    <a href="adminPanel.php"><button type="button" class="btn btn-block lulupapa">DashBoard</button></a>
    <a href="movie_post.php"><button type="button" class="btn btn-block lulupapa">Movie Post</button></a>
    <a href="coming_movie.php"><button type="button" class="btn btn-block lulupapa">Coming Movie</button></a>
    <a href="set_date_time.php"><button type="button" class="btn btn-block lulupapa">Date And Time</button></a>
    <a href="set_showTime.php"><button type="button" class="btn btn-block lulupapa">Set Showtime</button></a>
    <a href="manage_movie.php"><button type="button" class="btn btn-block lulupapa">Manage Movie</button></a>
    <a href="../log_out.php"><button type="button" class="btn btn-block lulupapa">Log Out</button></a>
</div>
</body>
</html>