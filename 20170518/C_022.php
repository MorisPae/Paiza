<?php
    //ローソク足
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
        $stock = trim(fgets(STDIN));
        $s[$i] = explode(" ", $stock)[0];
        $e[$i] = explode(" ", $stock)[1];
        $h[$i] = explode(" ", $stock)[2];
        $l[$i] = explode(" ", $stock)[3];
    }
    reset($s);
    $start = current($s);
    $end = end($e);
    $high = max($h);
    $low = min($l);
    print "$start $end $high $low";
 ?>
