<?php
    //犬ぞりトーナメント
    $round1 = explode(" ", trim(fgets(STDIN)));
    $round2 = explode(" ", trim(fgets(STDIN)));
    $p = array_merge($round1, $round2);
    $e = explode(" ", trim(fgets(STDIN)));
    $f = explode(" ", trim(fgets(STDIN)));

    //プレイヤーとタイムを一致させる
    for ($i = 0; $i < count($p); $i++) {
        if ($p[$i] == 1) {
            $p[$i] = $e[0];
        }
        elseif ($p[$i] == 2) {
            $p[$i] = $e[1];
        }
        elseif ($p[$i] == 3) {
            $p[$i] = $e[2];
        }
        elseif ($p[$i] == 4) {
            $p[$i] = $e[3];
        }
    }

    //1回戦

 ?>
