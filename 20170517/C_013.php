<?php
    //嫌いな数字
    $n = trim(fgets(STDIN)); //嫌いな1桁の数字
    $m = trim(fgets(STDIN)); //病棟の総数
    $flag = false;
    for ($i = 0; $i < $m; $i++) {
        $r[$i] = trim(fgets(STDIN));
        if (strpos($r[$i], $n) === false) {
            print $r[$i]."\n";
            $flag = true;
        }
    }
    if (!$flag) {
        print "none";
    }
 ?>
