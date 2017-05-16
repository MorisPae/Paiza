<?php
    //nまでの和
    $stdin = trim(fgets(STDIN));
    $sum = 0;
    for ($i = 0; $i <= $stdin; $i++) {
        $sum += $i;
    }
    print $sum;
 ?>
