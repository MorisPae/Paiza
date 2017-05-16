<?php
    //お花見の場所取り
    $others = trim(fgets(STDIN));
    $own = trim(fgets(STDIN));
    $others = explode(" ", $others);
    $cnt = 1;
    for ($i = 0; $i < count($others); $i++) {
        if ($own > $others[$i]) {
            $cnt++;
        }
    }
    print $cnt;
 ?>
