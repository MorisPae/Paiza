<?php
    //AボタンとBボタン
    $stdin = trim(fgets(STDIN));
    $a = explode(" ", $stdin)[0];
    $b = explode(" ", $stdin)[1];
    $charactor = 0;
    $output = $charactor + $a - $b;
    print $output;
 ?>
