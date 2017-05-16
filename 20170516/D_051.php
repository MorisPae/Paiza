<?php
    //衣替え
    $clothes = trim(fgets(STDIN));
    if(mb_substr_count($clothes, "W") >= 5) {
        print "OK";
    }
    else {
        print "NG";
    }
 ?>
