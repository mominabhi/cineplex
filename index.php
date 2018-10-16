<?php
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jQuery/jquery-3.3.1.min.js"></script>
    <!--for slider-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <link href="slider/2/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="slider/2/ninja-slider.js" type="text/javascript"></script>
    <style>
        body{background-image: url("image/background1.jpg")}
        a {color:#1155CC;}
        .slider-inner  ul li {padding: 10px 0;}
        header {display:block;padding:60px 0 20px;text-align:center;position:absolute;top:8%;left:8%;z-index:4;}
        header a {
            font-family: sans-serif;
            font-size: 24px;
            line-height: 24px;
            padding: 8px 13px 7px;
            color: #fff;
            text-decoration:none;
            transition: color 0.7s;
        }

         .footer .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

    </style>

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" style="margin-top: 50px">
        <div class="container-fluid">
            <div class="navbar navbar-header">
                <a class="navbar-header" href="index.php"><img src="image/logo.PNG"></a>
            </div>
            <ul class="nav navbar-nav " style="margin-left: 10px;">
                <li class="active"  style="padding:5px"><a href="index.php"><i class="fa fa-home" style="font-size:25px"></i></a></li>
                <li style="padding: 10px"><a href="#">SHOW TIME</a></li>
                <li style="padding: 10px"><a href="#">TICKET PRICE</a></li>
                <li style="padding: 10px"><a href="#">BUY TICKETS</a></li>
                <li style="padding: 10px"><a href="#">MEMBERS</a></li>
                <li style="padding: 10px"><a href="#">ABOUT CINEPLEX</a></li>
                <li style="padding: 10px"><a href="#">CONTACT</a></li>

            </ul>
            <div id="ninja-slider">
                <div class="slider-inner">
                    <ul>
                        <li>
                            <a class="ns-img" href="slider/img/venom.jpg"></a>
                            <div class="caption">THE VENOM</div>
                        </li>
                        <li>
                            <a class="ns-img" href="slider/img/nun2.jpg"></a>
                            <div class="caption">THE NUN</div>
                        </li>
                        <li>
                            <a class="ns-img" href="slider/img/jony.jpg"></a>
                            <div class="caption">JOHNNY ENGLISH</div>
                        </li>
                        <li>
                            <a class="ns-img" href="slider/img/predator.jpg"></a>
                            <div class="caption">PREDATOR</div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--Now showing -->
    <div class="now_showing">
        <div class="container-fluid">
            <h1 style="color: #a6e1ec">Now Showing Movies</h1>
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel panel-heading" style="text-align:center ">VENOM</div>

                    <div class="panel panel-body">
                        <img src="image/venom1.jpg" class="img-responsive" height="100%" width="100%">
                    </div>
                    <div class="panel panel-footer">
                        <a href="http://www.cineplexbd.com/cineplexbd/showtimedetails/206/1042"><button type="button" class="btn btn-primary btn-block">ShowTime & Details</button></a>
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel panel-heading" style="text-align:center ">VENOM</div>

                    <div class="panel panel-body">
                        <img src="image/The-Nun.jpg" class="img-responsive" height="100%" width="100%">
                    </div>
                    <div class="panel panel-footer">
                        <a href="http://www.cineplexbd.com/cineplexbd/showtimedetails/206/1042"><button type="button" class="btn btn-primary btn-block">ShowTime & Details</button></a>
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel panel-heading" style="text-align:center ">VENOM</div>

                    <div class="panel panel-body">
                        <img src="image/venom1.jpg" class="img-responsive" height="100%" width="100%">
                    </div>
                    <div class="panel panel-footer">
                        <a href="http://www.cineplexbd.com/cineplexbd/showtimedetails/206/1042"><button type="button" class="btn btn-primary btn-block">ShowTime & Details</button></a>
                    </div>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel panel-heading" style="text-align:center ">VENOM</div>

                    <div class="panel panel-body">
                        <img src="image/venom1.jpg" class="img-responsive" height="100%" width="100%">
                    </div>
                    <div class="panel panel-footer">
                        <a href="http://www.cineplexbd.com/cineplexbd/showtimedetails/206/1042"><button type="button" class="btn btn-primary btn-block">ShowTime & Details</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!--    Coming Soon -->
    <div class="thirdRow">
        <div class="container-fluid">
            <div class="col-sm-9">
                <div class="coming_soon">
                        <h1 style="color: #a6e1ec">Coming Soon Movies</h1>
                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel panel-heading" style="text-align:center ">VENOM</div>

                                <div class="panel panel-body">
                                    <img src="image/venom1.jpg" class="img-responsive" height="100%" width="100%">
                                </div>
                                <div class="panel panel-footer">
                                    <a href="http://www.cineplexbd.com/cineplexbd/showtimedetails/206/1042"><button type="button" class="btn btn-primary btn-block">Movie Details</button></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel panel-heading" style="text-align:center ">VENOM</div>

                                <div class="panel panel-body">
                                    <img src="image/venom1.jpg" class="img-responsive" height="100%" width="100%">
                                </div>
                                <div class="panel panel-footer">
                                    <a href="http://www.cineplexbd.com/cineplexbd/showtimedetails/206/1042"><button type="button" class="btn btn-primary btn-block">Movie Details</button></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel panel-heading" style="text-align:center ">VENOM</div>

                                <div class="panel panel-body">
                                    <img src="image/venom1.jpg" class="img-responsive" height="100%" width="100%">
                                </div>
                                <div class="panel panel-footer">
                                    <a href="http://www.cineplexbd.com/cineplexbd/showtimedetails/206/1042"><button type="button" class="btn btn-primary btn-block">Movie Details</button></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-3" style="margin-top: 70px">
                <div class="panel panel-primary">
                    <div class="panel panel-heading" style="font-family: cursive;text-align: center">Notice Board</div>
                    <div class="panel panel-body">STAR Cineplex is open seven days a week including Tuesdays.</div>
                </div>
                <h4 style="color: #a6e1ec">Now Showing Trailer</h4>
                <iframe width="100%" height="280px" src="https://www.youtube.com/embed/hn3wJ1_1Zsg">
                </iframe>
        </div>
        </div>
    </div>
    <div class=" panel panel-footer" style="margin-left: 40px;margin-right: 25px">
        <img src="image/buzz.png" height="100%" width="1045px">
    </div>
</div>
<div class="container-fluid" style="background-color: #222222;color: whitesmoke;font-family: sans-serif">
    <div class="col-sm-4">
        <ul style="list-style-type: none">
            <li><img src="image/footer.JPG"></li>
            <li><p>Contact Us:</p></li>
            <li><h4>Show Motion Limited </h4></li>
            <li><p>Level 8, Bashundhara City </p></li>
            <li><p>Dhaka 1205, Bangladesh.</p></li>
        </ul>
    </div>
    <div class="col-sm-6">
        <h1 style="font-family: cursive;">Our partners:</h1>
        <div class="col-lg-4"><img src="image/pepsi.PNG" class="img-responsive" width="100%" height="100%"></div>
        <div class="col-lg-4"><img src="image/independance.PNG" class="img-responsive" width="100%" height="100%"></div>
    </div>
    <div class="col-sm-2 footer" style="margin-top: 10px">

        <a href="#" style="color: white;"><i class="fa fa-facebook"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-twitter"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-google"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-linkedin"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-youtube"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-instagram"></i></a>

    </div>
</div>
</body>
</html>

