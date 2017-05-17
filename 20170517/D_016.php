<?php
    //Leet文字列
    $stdin = trim(fgets(STDIN));
    $leet = ["A" => "4", "E" => "3", "G" => "6", "I" => "1", "O" => "0", "S" => "5", "Z" => "2"];
    for ($i = 0; $i < strlen($stdin); $i++) {
        //指定した文字列にキーがあるかどうか判別する bool
        if (array_key_exists($stdin[$i], $leet)) {
        $stdin[$i] = $leet[$stdin[$i]];
        }
    }
    print $stdin;
 ?>
