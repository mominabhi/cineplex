<?php
include "admin.php";
$obj=new admin();

$movie_id=$_GET['movie_id'];
$result=$obj->movie_details($movie_id)->fetch_all();
if(isset($_POST["btn_submit"]))
{
  $obj->movie_edit($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-2">
        <?php include "adminPanel.php";?>
    </div>
    <div class="col-sm-8">
        <div class="panel panel-default" style="margin-top: 10px">
            <div class="panel panel-heading"><h2 style="text-align: center">Movie Post</h2></div>
            <div class="panel panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <?php
                    foreach ($result as $key=>$value)
                    {
                        ?>
                        <input type="hidden" class="form-control" name="movie_id" value="<?php echo $value[0];?>">

                        <div class="form-group">
                        <lebel for="email">Movie Name:</lebel>
                        <input type="text" class="form-control" name="movie_name" value="<?php echo $value[1];?>" placeholder="Enter the Movie name">
                    </div>
                    <div class="form-group">
                        <lebel for="moviePoster">Movie Poster:</lebel>
                        <input type="file" class="form-control" name="poster">
                        <img src="<?php echo "../".$value[2];?>" width="10%" height="5%">
                    </div>
                    <div class="form-group">
                        <lebel for="trailer">Movie Trailer:</lebel>
                        <input type="text" class="form-control" name="trailer" value="<?php echo $value[3];?>" placeholder="Enter Trailer Link">
                    </div>
                    <div class="form-group">
                        <lebel for="Synopsis">Synopsis:</lebel>
                        <textarea class="form-control" name="synopsis"><?php echo $value[4];?></textarea>
                    </div>
                    <div class="form-group">
                        <lebel for="rating">Movie Rating:</lebel>
                        <input type="number" class="form-control" value="<?php echo $value[5];?>" name="rating">
                    </div>
                    <div class="form-group">
                        <lebel for="director">Movie Director:</lebel>
                        <input type="text" class="form-control" name="director" value="<?php echo $value[6];?>" placeholder="Enter Director Name">
                    </div>
                    <div class="form-group">
                        <lebel for="release_date">Movie Release Date:</lebel>
                        <input type="date" class="form-control" value="<?php echo $value[7];?>" name="release_date">
                    </div>
                    <div class="form-group">
                        <lebel for="cast">Movie Cast:</lebel>
                        <input type="text" class="form-control" name="cast" value="<?php echo $value[8];?>" placeholder="Enter Cast names">
                    </div>
                    <div class="form-group">
                        <lebel for="genre">Movie Genre:</lebel>
                        <input type="text" class="form-control" name="genre" value="<?php echo $value[9];?>" placeholder="Enter Movie Genre">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="btn_submit">Let's Edit</button>
                        <?php
                    }
                    ?>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>