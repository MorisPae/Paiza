<?php
    //スタミナの計算
    $stdin = trim(fgets(STDIN));
    $m = explode(" ", $stdin)[0];
    $n = explode(" ", $stdin)[1];
    if ($m <= $n) {
        print $n - $m;
    }
    else {
        print "No";
    }
 ?>
