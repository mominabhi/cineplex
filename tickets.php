<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:user_registration.php");
}
include "classes/superClass.php";
include "header_login.php";
$obj = new superClass();
$result=$obj->last_submission()->fetch_all();
$count=sizeof($result);
if (isset($_POST['submit'])) {
   $obj->truncate_table();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .color{
            color:whitesmoke;
        }
    </style>
</head>
<body>
<div class="container col-sm-6 col-sm-offset-3 color">
    <h2>Tickets Info</h2>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>USER Name:</td>
            <td><?php echo $_SESSION['name'];?></td>
        </tr>
        <tr>
            <td>Movie Name:</td>
            <td><?php echo $_SESSION['M_Name'];?></td>
        </tr>
        <tr>
            <td>Show Date</td>
            <td><?php echo $_SESSION['M_date'];?></td>
        </tr>
        <tr>
            <td>Showtime:</td>
            <td><?php echo $_SESSION['M_time'];?></td>
        </tr>
        <tr>
            <td>Seat Numbers:</td>
            <td>
            <?php
            foreach ($result as $row=>$value)
            {
                $seatNumbers=$obj->get_seat_Number($value[1]);
                foreach ($seatNumbers as $seatNumber=>$number)
                {
                    echo $number[0]." ";
                }
            }
            ?>
            </td>
        </tr>
        <tr>
            <td>Ticket Quantity:</td>
            <td><?php echo $count; ?></td>
        </tr>
        <tr>
            <td>Ticket Prince</td>
            <td>200/=</td>
        </tr>
        <tr>
            <td><b>Total Amount:</b></td>
            <td ><?php
                echo"<b>".($count*=200)."/="."</b>";
                ?></td>
        </tr>
        </tbody>
    </table>
    <form action="" method="POST">
        <input type="submit" name="submit" value="Please Close the Functionality"  class="btn btn-danger">
    </form>
</div>
</body>
</html>



