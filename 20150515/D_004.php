<?php
    //文字列の結合
    $n = trim(fgets(STDIN));
    print "Hello ";
    for($i = 0; $i < $n; $i++) {
        $stdin = trim(fgets(STDIN));
        if($i < $n - 1){
        print("$stdin,");
        }
        else {

            print("$stdin.");
        }
    }
 ?>
