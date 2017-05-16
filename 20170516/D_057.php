<?php
    //プレゼント選び
    $grade = trim(fgets(STDIN));
    $selections = trim(fgets(STDIN));
    $present = explode(" ", $selections);
    if($grade == 3) {
        print $present[2];
    }
    elseif($grade == 2) {
        print $present[1];
    }
    elseif($grade == 1) {
        print $present[0];
    }
 ?>
