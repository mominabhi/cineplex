<?php
include "admin.php";
$obj=new admin();
$result=$obj->movie_read()->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jQuery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-2">
        <?php include "adminPanel.php"; ?>
    </div>
    <div class="col-sm-10" style="margin-top: 10px">
        <div class="panel panel-info">
            <div class="panel panel-heading">
                <h3 style="text-align:center">All Movie List</h3>
            </div>
            <div class="panel panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                  <tr>
                      <th>movie_name</th>
                      <th>director</th>
                      <th>release_date</th>
                      <th>genre</th>
                      <th>Actions</th>
                  </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($result as $row=>$value)
                    {
                       ?>

                    <tr>
                        <td><?php echo $value[1];?></td>
                        <td><?php echo $value[6];?></td>
                        <td><?php echo $value[7];?></td>
                        <td><?php echo $value[9];?></td>
                        <td>
                            <a href="movie_edit.php?movie_id=<?php echo $value[0];?>"><i class="fa fa-edit" style="font-size:30px;color:darkgreen;padding-left:3px"></i></a>
                            <a href="delete_movie.php?movie_id=<?php echo $value[0];?>"><i class="fa fa-trash" style="font-size:30px;color:darkred;margin-left: 10px"></i></a>
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
