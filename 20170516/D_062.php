<?php
    //ひな祭り
    $dolls = "ABCDEFGHIJ";
    $stdin = trim(fgets(STDIN));
    $splits = explode(" ", $stdin);
    print substr($dolls, 0, $splits[0])."\n";
    print substr($dolls, $splits[0], $splits[1])."\n";
    print substr($dolls, $splits[0] + $splits[1], $splits[2])."\n";
 ?>
