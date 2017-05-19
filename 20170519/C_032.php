<?php
    //お得な買い物
    $N = trim(fgets(STDIN));
    for ($i = 0; $i < $N; $i++) {
        $input = trim(fgets(STDIN));
        $v = explode(" ", $input)[0];
        $p = explode(" ", $input)[1];

        if ($v == 0) {
            $s[0] += $p;
        }
        elseif ($v == 1) {
            $s[1] += $p;
        }
        elseif ($v == 2) {
            $s[2] += $p;
        }
        elseif ($v == 3) {
            $s[3] += $p;
        }
    }
    for($i = 0; $i < 4; $i++) {
        $point[$i] = floor($s[$i] / 100);
    }
    $sum += ($point[0] * 5);
    $sum += ($point[1] * 3);
    $sum += ($point[2] * 2);
    $sum += $point[3];
    print $sum;
 ?>
