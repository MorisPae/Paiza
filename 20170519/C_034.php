<?php
    //先生の宿題
    $formula = explode(" ", trim(fgets(STDIN)));
    $a = $formula[0];
    $op = $formula[1];
    $b = $formula[2];
    $c = $formula[4];
    if ($a == "x") {
        if ($op == "+") {
            $ans = $c - $b;
        }
        elseif ($op == "-") {
            $ans = $c + $b;
        }
    }
    elseif ($b == "x") {
        if ($op == "+") {
            $ans = $c - $a;
        }
        elseif ($op == "-") {
            $ans = $a - $c;
        }
    }
    elseif ($c == "x") {
        if ($op == "+") {
            $ans = $a + $b;
        }
        elseif ($op == "-") {
            $ans = $a - $b;
        }
    }
    print abs($ans);
 ?>
