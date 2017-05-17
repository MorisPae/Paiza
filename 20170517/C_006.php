<?php
    //ハイスコアランキング
    $users = trim(fgets(STDIN)); //Nアイテムの個数 Mユーザーの人数 Kトップ何位
    $N = explode(" ", $users)[0];
    $M = explode(" ", $users)[1];
    $K = explode(" ", $users)[2];
    $points = trim(fgets(STDIN)); //N個のパラメータの各係数Ci
    $C = explode(" ", $points);

    for ($i = 0; $i < $M; $i++) {
        $stdin = trim(fgets(STDIN)); //各ユーザのXi数値
        $x[$i] = explode(" ", $stdin);

        $score[$i] = 0;
    }
    for($i = 0; $i < $M; $i++) {

    }
    for ($i = 0; $i < $M; $i++) {
        for($j = 0; $j < $N; $j++) {
            $score[$i] += $C[$j] * $x[$i][$j];
        }
    }

    rsort($score);
    for ($k = 0; $k < $K; $k++) {
        print round($score[$k])."\n";
    }
 ?>
