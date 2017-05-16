<?php
    //ピラミッドの作り方
    $stdin = trim(fgets(STDIN));
    $sum = 0;
    for ($i = 0; $i < $stdin; $i++) {
        $sum += $i + 1;
    }
    print $sum;
 ?>
