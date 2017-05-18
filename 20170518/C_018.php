<?php
    //何人前作れるか
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
        $rname_num = trim(fgets(STDIN));
        $a[$i] = explode(" ", $rname_num)[0];
        $b[$i] = explode(" ", $rname_num)[1];
    }
    $m = trim(fgets(STDIN));
    for ($i = 0; $i < $m; $i++) {
        $fname_num = trim(fgets(STDIN));
        $c[$i] = explode(" ", $fname_num)[0];
        $d[$i] = explode(" ", $fname_num)[1];
    }
    for ($i=0; $i < $n; $i++) {
        $x[$i] = 0;
        for ($j = 0; $j < $m; $j++) {
            if ($a[$i] == $c[$j]) {
                $x[$i] = floor($d[$j] / $b[$i]);
            }

        }
    }
    print min($x);
 ?>
