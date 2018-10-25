
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
            /*background-image: url("image/background1.jpg")*/
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar navbar-header">
            <a class="navbar-header" href="index.php"><img src="image/logo.PNG"></a>
        </div>
        <ul class="nav navbar-nav " style="margin-left: 10px;">
            <li class="active"  style="padding:5px"><a href="../index.php"><i class="fa fa-home" style="font-size:25px"></i></a></li>
            <li style="padding: 10px"><a href="showTime.php">SHOW TIME</a></li>
            <li style="padding: 10px"><a href="#">TICKET PRICE</a></li>
            <li style="padding: 10px"><a href="buy_ticket.php">BUY TICKETS</a></li>
            <li style="padding: 10px"><a href="#">MEMBERS</a></li>
            <li style="padding: 10px"><a href="#">ABOUT CINEPLEX</a></li>
            <li style="padding: 10px"><a href="#">CONTACT</a></li>
            <li style="padding: 10px"><a href="#"><?php echo $_SESSION['name'] ?></a></li>
            <li style="padding: 10px"><a href="log_out.php">Log Out</a></li>
        </ul>
    </div>
</nav>
</body>
</html>
