<?php
    //花粉症でつらい
    $m = trim(fgets(STDIN));
    $n = trim(fgets(STDIN));
    //ceil()割り算の切り上げ
    $boxes = ceil($n / $m);
    print $boxes;
 ?>
