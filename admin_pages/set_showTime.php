<?php
include "admin.php";
$obj = new admin();
$movies=$obj->movie_read()->fetch_all();
$dates=$obj->date_read();
$shows=$obj->time_read();
if(isset($_POST['btn_submit']))
{
    $msg=$obj->set_show_time($_POST);
    echo $msg;
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
    <div class="col-sm-6">
        <div class="panel panel-default" style="margin-top: 30px">
            <div class="panel panel-heading"><h2 style="text-align: center">SET SHOWTIME</h2></div>
            <div class="panel panel-body">
                <form method="post" action="">
                    <div class="form-group">
                        <lebel>SET MOVIE:</lebel>

                        <select class="form-control" name="movie">
                            <?php
                            foreach ($movies as $key => $value) {
                                ?>
                                <option value="<?php echo $value[0] ?>"><?php echo $value[1] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <lebel>SET DATE:</lebel>
                        <select class="form-control" name="date">
                            <?php
                            foreach ($dates as $key => $value) {
                                ?>
                                <option value="<?php echo $value[0] ?>"><?php echo $value[1] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <lebel>SET SHOWTIME:</lebel>
                        <?php
                        foreach ($shows as $key => $value) {
                            ?>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="show[]" value="<?php echo $value[0] ?>"><?php echo date('h:i A', strtotime($value[1])) ?>
                            </label>
                            <?php
                        }
                        ?>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="btn_submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>