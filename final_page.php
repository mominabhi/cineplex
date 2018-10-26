<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:user_registration.php");
}
include "classes/superClass.php";
include "admin_pages/admin.php";
include "header_login.php";
$get_id=$_GET['id'];
$quantity=0;
$obj = new superClass();
$object=new admin();
$result = $obj->all_seats();
$movie=$object->movie_details($_SESSION['movie_id']);
$movie_info=mysqli_fetch_assoc($movie);
$amount = 0;
if (isset($_POST['seat_submit'])) {
    $amount = $obj->seat($_POST);
    $quantity=sizeof($_POST['seat']);
}
$all_info=$obj->get_info_by_id($get_id);
foreach ($all_info as $key=>$info)
{
    $info[0];
    $info[1];
    $info[2];
    $_SESSION['M_Name']=$info[2];
    $_SESSION['M_date']=$info[1];
    $_SESSION['M_time']=date('h:i A', strtotime($info[0]));
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jQuery/jquery-3.3.1.min.js"></script>
    <style>
        .able{
            margin:5px;
            width:8%;
            background-color:#2c3e50;
            color: white
        }
        .disable{
            margin:5px;
            width:8%;
            background-color:#d1ccc0;
            color:white;
        }
    </style>
</head>
<body>
<div class="col-sm-8 col-sm-offset-2">
    <div class="panel panel-danger">
        <div class="panel panel-heading">
            <h3 style="text-align: center">Cineplex Ticket Selection</h3>
        </div>
        <div class="panel panel-body">
            <?php
            $current_date = date("Y-m-d H:i:s");
            echo "current:" .$current_date . "<br>";
            echo "User ID:" .$_SESSION['user_id'] . "<br>";
            echo "User Name:" . $_SESSION['name'] . "<br>";
            echo "User Email:" . $_SESSION['user_email'] . "<br>";
            echo "User Phone No:" . $_SESSION['number'] . "<br>";
            echo "<h3 style='text-align: center'>"."Ticket Price:" . $amount."</h3>";
            echo "<h3 style='text-align: center'>"."Ticket Quantity:" . $quantity."</h3>";
            echo "<h3 style='text-align: center'>".$info[2] ."</h3>";
            echo "<h3 style='text-align: center'>".$info[1] ."</h3>";
            echo "<h3 style='text-align: center'>".date('h:i A', strtotime($info[0])) ."</h3>";

            ?>
        </div>
        <div class="panel panel-body" style="margin-left: 25px">
            <div style="background-color:#778ca3;color: whitesmoke;text-align: center;margin:0 60px 0 40px">
                <h3>Screen</h3>
            </div>
            <br>
            <form method="post" action="">
                <input type="hidden" name="movie_date_time_id" value="<?php echo $get_id; ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <input type="hidden" name="movie_name" value="<?php echo $info[2]; ?>">
                <input type="hidden" name="movie_date" value="<?php echo $info[1]; ?>">
                <input type="hidden" name="movie_time" value="<?php echo $info[0]; ?>">
                <input type="hidden" name="current_time" value="<?php echo $current_date; ?>">
                <?php
                foreach ($result as $row) {

                    $dis = $obj->check($row['id'],$get_id);
                    if ($dis == 0) {
                        ?>
                        <button type="button" class="able btn btn-success">
                            <label class="checkbox-inline">
                                <input type="checkbox" style="width:30px;" name="seat[]"
                                       value="<?php echo $row['id']; ?>"><?php echo $row['seat']; ?>
                            </label>
                        </button>

                        <?php
                    } else {
                        ?>
                        <button type="button" class="disable btn">
                            <label class="checkbox-inline disabled">
                                <input type="checkbox" style="width30px;" name="seat[]"
                                       value="<?php echo $row['id']; ?>"
                                       disabled><?php echo $row['seat']; ?>
                            </label>
                        </button>

                        <?php
                    }
                    ?>
                    <?php
                }
                ?>
                <input type="submit" name="seat_submit" class="btn btn-success" style="width: 97%">
            </form>
        </div>
    </div>
</div>
</body>
</html>