<?php
    //文字列からN番目
    $stdin = trim(fgets(STDIN));
    $str = explode(" ", $stdin)[0];
    $num = explode(" ", $stdin)[1];
    print $str[$num - 1];
 ?>
