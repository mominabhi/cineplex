<?php
include "admin_pages/admin.php";
$obj = new admin();
$results = $obj->movie_read();
$fetches=$obj->coming_movie_read();
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
    <style>
        body {
            background-image: url("image/background1.jpg")
        }
    </style>
</head>
<body>
<div class="container">
    <?php include "home_header.php"; ?>
    <!--Now showing -->
    <div class="now_showing">
        <div class="container-fluid">
            <h1 style="color: #a6e1ec">Now Showing Movies</h1>
            <?php foreach ($results as $result) {
                ?>
                <div class="col-sm-3">
                    <div class="panel panel-info">
                        <div class="panel panel-heading"
                             style="text-align:center "><?php echo $result['movie_name'] ?></div>

                        <div class="panel panel-body">
                            <img src="<?php echo $result['image'] ?>" class="img-responsive" height="100%" width="100%">
                        </div>
                        <div class="panel panel-footer">
                            <a href="movie_details.php?movie_id=<?php echo $result['movie_id']?> ">
                                <button type="button" class="btn btn-primary btn-block">ShowTime & Details</button>
                            </a>
                        </div>
                    </div>

                </div>
                <?php
            }
            ?>

        </div>
    </div>
    <!--    Coming Soon -->
    <div class="thirdRow">
        <div class="container-fluid">
            <div class="col-sm-9">
                <div class="coming_soon">
                    <h1 style="color: #a6e1ec">Coming Soon Movies</h1>
                    <?php
                    foreach ($fetches as $fetch)
                    {
                        ?>
                        <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel panel-heading" style="text-align:center "><?php echo $fetch['movie_name'] ?></div>

                                <div class="panel panel-body">
                                    <img src="<?php echo $fetch['movie_image'] ?>" class="img-responsive" height="100%" width="100%">
                                </div>
                                <div class="panel panel-footer">
                                    <a href="comming_movie.php?cm_id=<?php echo $fetch['cm_id']?> ">
                                        <button type="button" class="btn btn-primary btn-block">Movie Details</button>
                                    </a>
                                </div>
                            </div>

                        </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-sm-3" style="margin-top: 70px">
                <div class="panel panel-primary">
                    <div class="panel panel-heading" style="font-family: cursive;text-align: center">Notice Board</div>
                    <div class="panel panel-body">STAR Cineplex is open seven days a week including Tuesdays.</div>
                </div>
                <h4 style="color: #a6e1ec">Now Showing Trailer</h4>
                <iframe width="100%" height="280px" src="https://www.youtube.com/embed/NooW_RbfdWI">
                </iframe>
            </div>
        </div>
    </div>
    <div class=" panel panel-body" style="margin-left: 40px;margin-right: 25px">
        <img src="image/buzz.png" height="100%" width="1045px">
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>

