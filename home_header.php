<!DOCTYPE HTML>
<html>
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" style="margin-top: 50px">
    <div class="container-fluid">
        <div class="navbar navbar-header">
            <a class="navbar-header" href="index.php"><img src="image/logo.PNG"></a>
        </div>
        <ul class="nav navbar-nav " style="margin-left: 10px;">
            <li class="active"  style="padding:5px"><a href="index.php"><i class="fa fa-home" style="font-size:25px"></i></a></li>
            <li style="padding: 10px"><a href="showTime.php">SHOW TIME</a></li>
            <li style="padding: 10px"><a href="#">TICKET PRICE</a></li>
            <li style="padding: 10px"><a href="#">BUY TICKETS</a></li>
            <li style="padding: 10px"><a href="#">MEMBERS</a></li>
            <li style="padding: 10px"><a href="#">ABOUT CINEPLEX</a></li>
            <li style="padding: 10px"><a href="#">CONTACT</a></li>
        </ul>
        <?php include "slider.php"; ?>
    </div>
</nav>
</body>
</html>

