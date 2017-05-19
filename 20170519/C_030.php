<?php
    //白にするか黒にするか
    $input = trim(fgets(STDIN));
    $sizes = explode(" ", $input);
    $H = $sizes[0];
    $W = $sizes[1];
    for ($i = 0; $i < $H; $i++) {
        $p = trim(fgets(STDIN));
        for ($j = 0; $j < $W; $j++) {
            $p1[$i] = explode(" ", $p);
            if (0 <= $p1[$i][$j] && $p1[$i][$j] < 128) {
                $bi[$i][$j] = 0;
            }
            elseif (128 <= $p1[$i][$j] && $p1[$i][$j] <= 255) {
                $bi[$i][$j] = 1;
            }
            $output += "$bi[$i][$j]";
        }
    }
    for ($i = 0; $i < $H; $i++) {
        for ($j = 0; $j < $W; $j++) {
            if ($j < $W - 1) {
            print $bi[$i][$j]." ";
            }
            else {
                print $bi[$i][$j]."\n";
            }
        }
    }
 ?>
