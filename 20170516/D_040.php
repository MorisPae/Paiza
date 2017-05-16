<?php
    //連休の天気
    $go_outside = 0;
    for ($i = 0; $i < 7; $i++) {
        $rainy_percent = trim(fgets(STDIN));
        if($rainy_percent <= 30) {
            $go_outside++;
        }
    }
    print $go_outside;
 ?>
