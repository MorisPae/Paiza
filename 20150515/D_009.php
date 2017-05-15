<?php
    //西暦の計算
    $stdin = trim(fgets(STDIN));
    $a = explode(" ", $stdin)[0];
    $b = explode(" ", $stdin)[1];
    if($a < $b) {
        print $b - $a;
    }
 ?>
