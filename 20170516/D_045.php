<?php
    //通知表
    $grade = ["E", "D", "C", "B", "A"];
    $N = trim(fgets(STDIN));
    for ($i = 0; $i < 5; $i++) {
        if($N == $i + 1) {
        print $grade[$i];
        }
    }
 ?>
