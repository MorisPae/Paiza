<?php
    //正三角形かどうか
    $sideA = trim(fgets(STDIN));
    $sideB = trim(fgets(STDIN));
    $sideC = trim(fgets(STDIN));
    if($sideA === $sideB && $sideB === $sideC) {
        print "YES";
    }
    else {
        print "NO";
    }
 ?>
