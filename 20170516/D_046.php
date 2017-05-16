<?php
    //不思議なタマゴ
    $stdin = trim(fgets(STDIN));
    $d_1 = explode(" ", $stdin)[0];
    $d_2 = explode(" ", $stdin)[1];
    $d_3 = explode(" ", $stdin)[2];
    print max($d_1, $d_2, $d_3);
 ?>
