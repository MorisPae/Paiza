<?php
    //数の比較
    $stdin = trim(fgets(STDIN)); //stdinはキーボードによる標準入力のこと
    $a = explode(" ", $stdin)[0];
    $b = explode(" ", $stdin)[1];
    if($a > $b) {
        echo $a;
    }
    elseif($a < $b) {
        echo $b;
    }
    else {
        echo "eq";
    }
 ?>
