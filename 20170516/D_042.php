<?php
    //行列
    $n12 = trim(fgets(STDIN));
    $n34 = trim(fgets(STDIN));
    $n1 = explode(" ", $n12)[0];
    $n2 = explode(" ", $n12)[1];
    $n3 = explode(" ", $n34)[0];
    $n4 = explode(" ", $n34)[1];
    print $n1 * $n4 - $n2 * $n3;
 ?>
