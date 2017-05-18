<?php
    //ファックスの用紙回収
    $m = trim(fgets(STDIN)); //一度に運べる数
    $n = trim(fgets(STDIN)); //ファックスが届く回数
    //時間ごと合計枚数と取りに行く回数の初期化
    for ($j = 0; $j < 24; $j++) {
        $sum[$j] = 0;
        $count[$j] = 0;
    }

    for ($i = 0; $i < $n; $i++) {
        $time[$i] = trim(fgets(STDIN));
        $x[$i] = explode(" ", $time[$i])[0]; //x時
        $y[$i] = explode(" ", $time[$i])[1]; //y分
        $c[$i] = explode(" ", $time[$i])[2]; //c枚数

        for ($j = 0; $j < 24; $j++) {
            if ($x[$i] == $j) {
                $sum[$j] += $c[$i];
            }
        }
    }
    for ($j = 0; $j < 24; $j++) {
        if ($sum[$j] != 0) {
            $count[$j] = ceil($sum[$j] / $m);
        }
    }
    print array_sum($count);
    //print_r($x);
    //print_r($sum);
    //print_r($count);

 ?>
