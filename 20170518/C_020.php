<?php
    //残り物の量
    $stdin = trim(fgets(STDIN));
    $m = explode(" ", $stdin)[0];
    $p = explode(" ", $stdin)[1];
    $q = explode(" ", $stdin)[2];
    $raw = $m * ($p / 100);
    $dish = ($m - $raw) * ($q / 100);
    $remain = $m - $raw - $dish;
    print $remain;
 ?>
