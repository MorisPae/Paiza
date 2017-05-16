<?php
    // 11/11
    $stdin = trim(fgets(STDIN));
    $count = mb_substr_count($stdin, "1");
    if($count >= 11) {
        print "OK";
    }
    elseif($count < 11) {
        print 11 - $count;
    }
 ?>
