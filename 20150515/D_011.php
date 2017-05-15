<?php
    //アルファベットで何番目
    $alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $stdin = trim(fgets(STDIN));
    for($i = 0; $i <= strlen($alpha); $i++) {
        if($stdin == $alpha[$i]) {
            print $i + 1;
        }
    }
 ?>
