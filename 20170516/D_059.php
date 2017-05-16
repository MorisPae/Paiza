<?php
    //トランプ占い
    $stdin = trim(fgets(STDIN));
    $f_tell = explode(" ", $stdin);
    if($f_tell[0] == "J" && $f_tell[1] == "J") {
        $f_tell[1] = "Q";
    }
    echo $f_tell[0]." ".$f_tell[1];
 ?>
