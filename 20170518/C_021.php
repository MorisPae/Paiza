<?php
    //暴風域にいますか
    $stdin = trim(fgets(STDIN));
    $cyclone = explode(" ", $stdin);
    $xc = $cyclone[0];
    $yc = $cyclone[1];
    $r1 = $cyclone[2];
    $r2 = $cyclone[3];
    
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
        $input = trim(fgets(STDIN));
        $x[$i] = explode(" ", $input)[0];
        $y[$i] = explode(" ", $input)[1];
        $danger = ($x[$i] - $xc) ** 2 + ($y[$i] - $yc)** 2;
        if ($r1 ** 2 <= $danger && $danger <= $r2 ** 2) {
            print "yes\n";
        }
        else {
            print "no\n";
        }
    }
 ?>
