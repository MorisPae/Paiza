<?php
    //アドレスの調査
    $num = trim(fgets(STDIN));
    for ($i = 0; $i < $num; $i++) {
        $stdin = trim(fgets(STDIN));
        $ip = explode(".", $stdin);
        if (count($ip) != 4) {
            print "False\n";
            continue;
        }

        $count = 0;
        for ($j = 0; $j < count($ip); $j++) {
            if (0 <= $ip[$j] && $ip[$j] <= 255) {
                $count++;
            }
        }
        if ($count == 4) {
            print "True\n";
        }
        else {
            print "False\n";
        }
    }
 ?>
