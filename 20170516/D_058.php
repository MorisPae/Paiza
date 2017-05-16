<?php
    //初詣で
    $stdin = trim(fgets(STDIN));
    $bow = "A";
    $clap = "B";
    $bow1 = explode(" ", $stdin)[0];
    $clap1 = explode(" ", $stdin)[1];
    $bow2 = explode(" ", $stdin)[2];

    print str_repeat($bow, $bow1);
    print str_repeat($clap, $clap1);
    print str_repeat($bow, $bow2);
 ?>
