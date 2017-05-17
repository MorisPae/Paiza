<?php
    //ポイントカードの計算
    $point = 0;
    $N = trim(fgets(STDIN));
    for ($i = 0; $i < $N; $i++) {
        $rec = trim(fgets(STDIN));
        $d[$i] = explode(" ", $rec)[0];
        $p[$i] = explode(" ", $rec)[1];
        if (strpos($d[$i], "3") !== false) {
            $point += floor($p[$i] / 100 * 3);
        }
        elseif (strpos($d[$i], "5") !== false) {
            $point += floor($p[$i] / 100 * 5);
        }
        else {
            $point += floor($p[$i] / 100);
        }
    }
    print $point;
 ?>
