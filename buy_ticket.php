<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:user_registration.php");
}
$_SESSION['movie_id'];
include "classes/superClass.php";
include "admin_pages/admin.php";
include "header_login.php";

$obj = new superClass();
$object = new admin();
$result = $obj->all_seats();
$movie = $object->movie_details($_SESSION['movie_id']);
$movie_info = mysqli_fetch_assoc($movie);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="col-sm-8 col-sm-offset-2">
    <div class="panel panel-danger">
        <div class="panel panel-heading">
            <h3 style="text-align: center">Cineplex Ticket Selection</h3>
        </div>
        <div class="panel panel-body">
            <?php
            echo "User Name:" . $_SESSION['name'] . "<br>";
            echo "User Email:" . $_SESSION['user_email'] . "<br>";
            echo "User Phone No:" . $_SESSION['number'] . "<br>";
            echo "<h3 style='text-align: center;margin-right: 80px'>" . $movie_info['movie_name'] . "</h3>";
            ?>
            <div class="col-sm-4 col-sm-offset-4">
                <img src="<?php echo $movie_info['image'] ?>" class="img-responsive" height="70%" width="70%">
            </div>
        </div>
        <div class="panel panel-body">
            <div class="container-fluid col-sm-8 col-sm-offset-2">
                <table class="table table-bordered" style="margin-top: 30px">
                    <thead>
                    <tr>
                        <th class="text-center btn-warning">Date</th>
                        <th class="text-center btn-success">Show Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $date = $obj->get_date_by_movie($_SESSION['movie_id']);
                    foreach ($date as $key => $value) {
                        ?>
                        <tr class="info">
                            <td><?php echo $value[0] ?></td>
                            <td>
                                <ul class="col-sm-12">
                                    <?php
                                    $showTime = $obj->get_showTime_by_movie($value[2]);
                                    foreach ($showTime as $vey => $item)
                                    {
                                    ?>
                                    <li style="display: inline">
                                        <a href="final_page.php?id=<?php echo $item[1]; ?>"
                                           style="text-decoration: none">
                                            <button type="button" class="btn btn-primary "><?php $show = $item[0];
                                                echo date('h:i A', strtotime($show)); ?></button>
                                        </a>
                                        <?php
                                        }
                                        ?>
                                </ul>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>