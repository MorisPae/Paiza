<?php
    //時差を求めたい
    $N = trim(fgets(STDIN));
    for ($i = 0; $i < $N; $i++) {
        $input = trim(fgets(STDIN));
        $p[$i] = explode(" ", $input)[0]; //都市名
        $s[$i] = explode(" ", $input)[1]; //その都市の基準時間からの時差
    }
    $contr = trim(fgets(STDIN));
    $q = explode(" ", $contr)[0]; //投稿者の現在都市
    $t = explode(" ", $contr)[1]; //投稿時間
    $th = explode(":", $t)[0]; //投稿時間 hh
    $tm = explode(":", $t)[1]; //投稿分 mm

    //基準時間の判別
    for ($i = 0; $i < $N; $i++) {
        if ($q == $p[$i]) {
            $now = $th - $s[$i];
            break;
        }
    }
    //もし時間がマイナスになった場合と24以上になった場合に時間も次に繰り返す
    if ($now < 0) {
        $now = 24 + $now;
    }
    elseif ($now >= 24) {
        $now = $now - 24;
    }

    for ($i = 0; $i < $N; $i++) {
        $td = $now + $s[$i];
        if ($td < 0) {
            $td = 24 + $td;
        }
        elseif ($td >= 24) {
            $td = $td - 24;
        }
        printf("%02d".":"."%02d"."\n", $td, $tm);
    }
 ?>
