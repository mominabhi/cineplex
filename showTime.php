<?php
include "header.php";
include "admin_pages/admin.php";
$obj = new admin();
//$result=$obj->showTime();
 $result=$obj->today_show_time();
?>
<div class="container-fluid col-sm-8 col-sm-offset-2">
    <div class="panel panel-primary">
        <div class="panel panel-heading">
            <?php
            $date = date("d-m-Y");
            $tarik=date("l");
            echo "<h3 style='text-align: center'>$tarik,$date</h3>";
            ?>
        </div>
        <div class="panel panel-body">
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                <tr>

                    <th class="text-center btn-warning">Movie Name</th>
                    <th class="text-center btn-success">Show Time</th>

                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($result as $row)
                {
                    ?>
                    <tr class="info">
                        <td><?php echo $row['movie_name']?></td>
                        <td>
                            <ul class="col-sm-12">
                                <li class="btn btn-warning"><?php $show = $row['show1'];
                                    echo date('h:i A', strtotime($show)); ?></li>
                                <li class="btn btn-info"><?php $show = $row['show2'];
                                    echo date('h:i A', strtotime($show)); ?></li>
                                <li class="btn btn-danger"><?php $show = $row['show3'];
                                    echo date('h:i A', strtotime($show)); ?></li>
                            </ul>
                        </td>
                    </tr>
                    <?php
                }
                ?>




                <!---->
                <!--            --><?php
                //            foreach ($result as $row)
                //            {
                //            ?>
                <!--            <tr class="info">-->
                <!--                <td>--><?php //echo $row['date'] ?><!--</td>-->
                <!--                <td>--><?php //echo "<pre>".$row['lulu'] ?><!--</td>-->
                <!--                date('h:i A', strtotime($show));-->
                <!--                <td>--><?php //echo $row['GROUP_CONCAT(show1)'] ?><!--</td>-->
                <!---->
                <!--            </tr>-->
                <!--            --><?php
                //            }
                ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
