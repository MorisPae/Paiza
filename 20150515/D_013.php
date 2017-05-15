<?php
    //割り算
    $stdin = trim(fgets(STDIN));
    $m = explode(" ", $stdin)[0];
    $n = explode(" ", $stdin)[1];
    $x = $m / $n;
    $y = $m % $n;
    printf("%d"." "."%d", $x, $y);
 ?>
