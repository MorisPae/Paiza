<?php
    //お月見だんご
    $dumpling = trim(fgets(STDIN));
    $d1 = explode(" ", $dumpling)[0];
    $d2 = explode(" ", $dumpling)[1];
    if($d1 >= 5) {
        $d1 = 5;
    }
    if($d2 >= 5) {
        $d2 = 5;
    }
    $sum = $d1 + $d2;
    print $sum;
 ?>
