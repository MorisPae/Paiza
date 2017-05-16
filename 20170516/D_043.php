<?php
    //天気の表示
    $weather = trim(fgets(STDIN));
    if(0 <= $weather && $weather <= 30) {
        print "sunny";
    }
    elseif(31 <= $weather && $weather <= 70) {
        print "cloudy";
    }
    elseif(71 <= $weather && $weather <= 100) {
        print "rainy";
    }
 ?>
