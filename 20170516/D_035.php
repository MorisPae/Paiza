<?php
    //日付データ
    $stdin = trim(fgets(STDIN));
    $year = explode(" ", $stdin)[0];
    $month = explode(" ", $stdin)[1];
    $day = explode(" ", $stdin)[2];
    print $year."/".$month."/".$day;
 ?>
