<?php
    //文字列の一致
    $s = trim(fgets(STDIN));
    $t = trim(fgets(STDIN));
    if($s == $t) {
        echo "Yes";
    }
    else {
        echo "No";
    }
 ?>
