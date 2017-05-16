<?php
    //はじめまして
    $stdin = trim(fgets(STDIN));
    $s1 = explode(" ", $stdin)[0];
    $s2 = explode(" ", $stdin)[1];
    if($s2 == "M") {
        print "Hi, Mr. ".$s1;
    }
    elseif($s2 == "F") {
        print "Hi, Ms. ".$s1;
    }
 ?>
