<?php
    //旅行の計画
    $stdin = trim(fgets(STDIN));
    $M = explode(" ", $stdin)[0]; //連休の日数
    $N = explode(" ", $stdin)[1]; //旅行の日数

    //値の取得
    for ($i = 0; $i < $M; $i++) {
        $input = trim(fgets(STDIN));
        $d[$i] = explode(" ", $input)[0]; //日付
        $r[$i] = explode(" ", $input)[1]; //降水確率

    }
    //$N日間の降水確率の合計を配列に入れる
    for ($i = 0; $i <= $M - $N; $i++) {
        $sum[$i] = 0;
        for ($j = 0; $j < $N; $j++) {
            $sum[$i] += $r[$i + $j];
        }
    }
    $min = min($sum); //$N日間の降水確率合計の最小値
    //最初の日付の
    $key = array_keys($sum, $min); //最小値のときの配列番号
    $fkey = min($key);
    print $d[$fkey]." ".$d[$fkey + $N - 1];
 ?>
