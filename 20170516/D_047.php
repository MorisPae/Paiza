<?php
    //メダリストの表示
    for ($i = 0; $i < 3; $i++) {
        $stdin = trim(fgets(STDIN));
        if($i == 0) {
            print "Gold $stdin\n";
        }
        elseif ($i == 1) {
            print "Silver $stdin\n";
        }
        elseif ($i == 2) {
            print "Bronze $stdin\n";
        }
    }
 ?>
