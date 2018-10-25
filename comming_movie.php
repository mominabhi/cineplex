<?php
include "header.php";
include "admin_pages/admin.php";
$obj = new admin();
$movie_id = 0;
$movie_id = $_GET['cm_id'];
$result = $obj->coming_movie($movie_id);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE HTML>
<html>
<head>
    <style>
        li {
            margin-left: 10px;
        }

        .marginTop50 {
            margin-top: 50px
        }
    </style>
</head>
<body>
<div class="container">
    <div class="panel panel-primary marginTop50">
        <div class="panel panel-heading" style="text-align: center"><h2><?php echo $data['movie_name'] ?></h2></div>
        <div class="panel panel-body">
            <div class="container-fluid">
                <div class="col-sm-3">
                    <img src="<?php echo $data['movie_image'] ?>" class="img-responsive" height="70%" width="70%">

                </div>
                <div class="col-sm-3">
                    <div class="description marginTop50">
                        <h3>Synopsis</h3>
                        <p><?php echo $data['synopsis'] ?></p>
                        <a href="<?php echo $data['trailer'] ?>" style="text-decoration: none">
                            <button type="button" class="btn btn-warning ">Watch Movie Trailer</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="container-fluid">
                        <div class="col-sm-7">
                            <h3>Rating</h3>
                            <?php
                            for ($i = 1; $i <= $data['rating']; $i++) {
                                echo "<i class=\"fa fa-star-o\" style=\"font-size:30px;color: #2aabd2\"></i>";
                            }

                            ?>

                        </div>
<!--                        <div class="col-sm-5" style="margin-top: 20px">-->
<!--                            <a href="#" style="text-decoration: none">-->
<!--                                <button type="button" class="btn btn-warning btn-block ">Buy Tickets</button>-->
<!--                            </a>-->
<!--                        </div>-->
                    </div>
                    <div class="container-fluid" style="margin: 20px 0 0 20px">
                        <table class="table table-condensed table-bordered">

                            <tbody>
                            <tr>
                                <td>Director:</td>
                                <td><?php echo $data['director'] ?></td>
                            </tr>
                            <tr>
                                <td>Release Date:</td>
                                <td><?php echo $data['release_date'] ?></td>
                            </tr>
                            <tr>
                                <td>Cast:</td>
                                <td><?php echo $data['cast'] ?></td>
                            </tr>
                            <tr>
                                <td>Genre:</td>
                                <td><?php echo $data['genre'] ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
include "footer.php"
?>

