<?php
    //クジの当選番号
    $cnums = trim(fgets(STDIN));
    $c = explode(" ", $cnums);
    $n = trim(fgets(STDIN));
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        $input = trim(fgets(STDIN));
        $lot = explode(" ", $input);
        for ($j = 0; $j < count($c); $j++) {
            for ($k = 0; $k < count($lot); $k++) {
                if ($c[$j] == $lot[$k]) {
                    $count++;
                }
            }
        }
        print $count."\n";
        $count = 0;
    }
 ?>
