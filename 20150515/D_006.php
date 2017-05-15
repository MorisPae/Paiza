<?php
    //単位の計算
    $stdin = trim(fgets(STDIN));
    $n = explode(" ", $stdin)[0];
    $s = explode(" ", $stdin)[1];
    if($s == km) {
        print $n * 1000000;
    }
    elseif($s == m) {
        print $n * 1000;
    }
    elseif($s == cm) {
        print $n * 10;
    }
 ?>
