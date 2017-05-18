<?php
    //ハイアンドローカードゲーム
    $stdin = trim(fgets(STDIN)); //親カード
    $a = explode(" ", $stdin)[0];
    $b = explode(" ", $stdin)[1];

    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
        $children = trim(fgets(STDIN));
        $c1[$i] = explode(" ", $children)[0];
        $c2[$i] = explode(" ", $children)[1];

        if ($a > $c1[$i]) {
            print "High\n";
        }
        elseif ($a == $c1[$i] && $b < $c2[$i]) {
            print "High\n";
        }
        elseif ($a == $c1[$i] && $b > $c2[$i]) {
            print "Low\n";
        }
        else {
            print "Low\n";
        }
    }
 ?>
