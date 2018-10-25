<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
    header("Location:admin_login.php");
}
echo $_SESSION['admin_id']."<br>";
echo $_SESSION['admin_email']."<br>";
echo $_SESSION['admin_name'];
?>
<br>
<a href="../log_out.php"><button type="button">Log Out</button></a>
