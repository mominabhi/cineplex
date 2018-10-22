<?php
include "header.php";
include "classes/superClass.php";
$obj = new superClass();
$dates = $obj->date_read();
?>
<div class="container-fluid col-sm-8 col-sm-offset-2">
    <div class="panel panel-danger">
        <div class="panel panel-heading"><h3>MOVIE SCHEDULE</h3></div>
        <div class="panel panel-body">
            <?php
            foreach ($dates as $date) {
                ?>
                <br>
                <h4 style="color: #2aabd2"><i class="fa fa-calendar"></i><?php echo $date['date'] ?></h4>
                <table class="table table-bordered" style="margin-top: 30px">
                    <tbody>

                    <?php
                    $movie_names = $obj->get_movie_by_date($date['id']);
                    foreach ($movie_names as $key => $value) {
                        ?>
                        <tr class="info">
                            <td style="color: #337ab7;font-size: 16px"><i
                                        class="fa fa-film"></i><i><?php echo $value[1] ?></i></td>
                            <td>
                                <ul style="padding-top: 10px">
                                    <?php
                                    $showtime=$obj->get_showTime_by_movie($value[2]);
                                    foreach ($showtime as $show=>$item)
                                    {
                                     ?>
                                        <li class="btn btn-info">
                                            <?php $show = "$item[0]";
                                            echo date('h:i A', strtotime($show)); ?></li>
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
                <?php
            }
            ?>
        </div>
    </div>
</div>
