<?php
    //N文字目まで出力
    $str = trim(fgets(STDIN));
    $num = trim(fgets(STDIN));
    for($i = 0; $i < $num; $i++) {
        print $str[$i];
    }
 ?>
