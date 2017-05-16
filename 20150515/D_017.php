<?php
    //最大と最小
    for($i = 0; $i < 5; $i++) {
    $stdin = trim(fgets(STDIN));
    $stdins[] = $stdin;
    }
    $max = max($stdins);
    $min = min($stdins);
    print $max."\n".$min;
 ?>
