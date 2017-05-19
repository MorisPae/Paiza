<?php
    //試験の合格判定
    $N = trim(fgets(STDIN));
    $count = 0;
    //値の取得
    for ($i = 0; $i < $N; $i++) {
        $input = explode(" ", trim(fgets(STDIN)));
        $t = $input[0];
        $sum = 0;
        $lsum = 0;
        $ssum = 0;

        //文系の合格判別
        if ($t == "l") {
            for ($j = 0; $j < count($input) - 1; $j++) {
                $sum += $input[$j+1];
            }
            for ($j = 0; $j < 2; $j++) {
                $lsum += $input[$j+4];
            }
            if ($sum >= 350 && $lsum >= 160) {
                $count++;
            }
        }

        //理系の合格判別
        if ($t == "s") {
            for ($j = 0; $j < count($input) - 1; $j++) {
                $sum += $input[$j+1];
            }
            for ($j = 0; $j < 2; $j++) {
                $ssum += $input[$j+2];
            }
            if ($sum >= 350 && $ssum >= 160) {
                $count++;
            }
        }
    }
    print $count;
 ?>
