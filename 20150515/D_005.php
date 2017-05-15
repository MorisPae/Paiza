<?php
    //等差数列
    $stdin = trim(fgets(STDIN)); //stdinはキーボードによる標準入力のこと
    $m = explode(" ", $stdin)[0];
    $n = explode(" ", $stdin)[1];
    for($i = 0; $i < 10; $i++) {
        if($i < 9){
        print($m + $n * $i." ");
        }
        else {
            print($m + $n * $i."\n");
        }
    }
 ?>
