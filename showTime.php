<?php
include "header.php";
include "admin_pages/admin.php";
$obj = new admin();
$result = $obj->show_Date();

?>
<div class="container-fluid col-sm-8 col-sm-offset-2" >
    <div class="panel panel-primary">
        <div class="panel panel-heading"><h3>MOVIE SCHEDULE</h3></div>
        <div class="panel panel-body">
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                <tr>
                    <th class="text-center btn-warning">Date</th>
                    <th class="text-center btn-success">Show Time</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach ($result as $row) {
                    ?>
                    <tr class="info">
                        <td><?php echo $row['date'] ?></td>
                        <td>
                        <?php
                        $rel = $obj->show_Time($row['date']);

                        foreach ($rel as $rows)
                        {

                            ?>

                                <ul style="padding-top: 10px">
                                    <li ><?php echo "<b><i>".$rows['movie_name']."</b></i>" ?>
                                        <ul>
                                            <li class="btn btn-warning"><?php $show = $rows['show1'];
                                                echo date('h:i A', strtotime($show)); ?></li>
                                            <li class="btn btn-info"><?php $show = $rows['show2'];
                                                echo date('h:i A', strtotime($show)); ?></li>
                                            <li class="btn btn-danger"><?php $show = $rows['show3'];
                                                echo date('h:i A', strtotime($show)); ?></li>
                                        </ul>
                                    </li>
                                </ul>
                        <?php
                        }
                        ?>
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
