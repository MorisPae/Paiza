<?php
    //エラーコードの分類
    $stdin = trim(fgets(STDIN));
    if (100 <= $stdin && $stdin <= 999 && $stdin[0] == 2) {
        print "ok";
    }
    elseif (100 <= $stdin && $stdin <= 999 && $stdin[0] == 4) {
        print "error";
    }
    else {
        print "unknown";
    }
 ?>
