<?php
include "admin.php";
$obj=new admin();
$tbl_name="movie_list";
$movie_id=$_GET['movie_id'];
$obj->delete($tbl_name,$movie_id);
?>