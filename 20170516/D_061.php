<?php
    //3倍返し
    $stdin = trim(fgets(STDIN));
    if($stdin == 0) {
        print "1";
    }
    elseif(0 < $stdin && $stdin <= 100) {
        print $stdin * 3;
    }
 ?>
