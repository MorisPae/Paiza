<?php
    //ウサギと人参
    $stdin = trim(fgets(STDIN));
    $N = explode(" ", $stdin)[0]; //人参の数
    $S = explode(" ", $stdin)[1]; //目安の糖分
    $p = explode(" ", $stdin)[2]; //許容誤差
    $num = 0; //一番最初にでる最も質量が高い人参の番号を代入させる
    $max = 0; //最も質量が高い人参を選ぶために用いる
    for ($i = 0; $i < $N; $i++) {
        $callot = trim(fgets(STDIN));
        $m[$i] = explode(" ", $callot)[0];
        $s[$i] = explode(" ", $callot)[1];
        if ($S - $p <= $s[$i] && $s[$i] <= $S + $p) {
            if ($m[$i] > $max) {
                $max = $m[$i];
                $num = $i + 1;
            }
        }
    }
    if ($num == 0) {
        print "not found";
    }
    else {
        print $num;
    }
 ?>
