<?php
    //かまくらづくり
    $sides = trim(fgets(STDIN));
    $r1 = explode(" ", $sides)[0];
    $r2 = explode(" ", $sides)[1];
    if(1 <= $r2 && $r2 < $r1 && $r1 <= 20) {
        $v1 = $r1 ** 3;
        $v2 = $r2 ** 3;
        print $v1 - $v2;
    }
 ?>
