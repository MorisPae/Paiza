<?php
    //完全一致とほぼ完全一致
    $Q = trim(fgets(STDIN));
    for ($i = 0; $i < $Q; $i++) {
        $n[$i] = trim(fgets(STDIN));
        $x[$i] = 0;
        if ($n[$i] >= 2) {
            for ($j = 0; $j < $n[$i]; $j++) {
                if ($n[$i] % ($j + 1) == 0) {
                    $x[$i] += $n[$i] / ($j + 1);
                }
            }
            $dsum = $x[$i] - $n[$i];
            if ($dsum == $n[$i]) {
                print "perfect\n";
            }
            elseif (abs($dsum - $n[$i]) == 1) {
                print "nearly\n";
            }
            else {
                print "neither\n";
            }
        }
    }
 ?>
