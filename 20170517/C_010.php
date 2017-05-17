<?php
    //安息の地を求めて
    //工事現場の座標(X, y)と騒音の大きさR
    $stdin = trim(fgets(STDIN));
    $Const = explode(" ", $stdin);
    $a = $Const[0];
    $b = $Const[1];
    $R = $Const[2];

    //木陰の数と座標
    $N = trim(fgets(STDIN));
    for ($i = 0; $i < $N; $i++) {
        $trees_coordinates = trim(fgets(STDIN));
        $x[$i] = explode(" ", $trees_coordinates)[0];
        $y[$i] = explode(" ", $trees_coordinates)[1];
        if (($x[$i] - $a) ** 2 + ($y[$i] - $b) ** 2 < $R ** 2) {
            print "noisy\n";
        }
        else {
            print "silent\n";
        }
    }
 ?>
