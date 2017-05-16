<?php
    //スイッチのオンオフ
    $stdin = trim(fgets(STDIN));
    $switch = ["OFF", "ON"];
    $binary = $stdin % 2;
    print $switch[$binary];
 ?>
