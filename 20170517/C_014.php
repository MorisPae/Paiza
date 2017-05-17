<?php
    //ボールが入る箱
    $stdin = trim(fgets(STDIN));
    $n = explode(" ", $stdin)[0]; //箱の数
    $r = explode(" ", $stdin)[1]; //ボールの半径
    $num = 0;

    for ($i = 0; $i < $n; $i++) {
        $boxes = trim(fgets(STDIN));
        $sizes = explode(" ", $boxes);
        $min = min($sizes);
        $num++;
        if ($min >= $r * 2) {
            print $num."\n";
        }
    }
 ?>
