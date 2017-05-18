<?php
    //単語テストの採点
    $sum = 0;
    $N = trim(fgets(STDIN));
    for ($i = 0; $i < $N; $i++) {
        $count = 0;
        $input = trim(fgets(STDIN));
        $q = explode(" ", $input)[0];
        $a = explode(" ", $input)[1];

        if ($q == $a) {
            $sum += 2;
        }
        elseif (strlen($q) == strlen($a)) {
            for ($j = 0; $j < strlen($a); $j++) {
                if ($q[$j] != $a[$j]) {
                    $count++;
                }
            }
            if ($count == 1) {
                $sum += 1;
            }
        }
    }
    print $sum;
 ?>
