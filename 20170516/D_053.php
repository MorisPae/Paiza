<?php
    //トリック・オア・トリート
    $stdin = trim(fgets(STDIN));
    if($stdin == "candy" || $stdin == "chocolate") {
        print "Thanks!";
    }
    else {
        print "No!";
    }
 ?>
