<?php
    //野球の審判
    $N = trim(fgets(STDIN));
    $b = 0;
    $s = 0;
    for ($i = 0; $i < $N; $i++) {
        $input = trim(fgets(STDIN));
        if ($input == "ball") {
            $b++;
            if ($b < 4) {
                print "ball!\n";
            }
            elseif ($b == 4) {
                print "fourball!\n";
            }
        }
        elseif ($input == "strike") {
            $s++;
            if ($s < 3) {
                print "strike!\n";
            }
            elseif ($s == 3) {
                print "out!\n";
            }
        }
    }
 ?>
