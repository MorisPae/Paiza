<?php
    //頭文字
    $stdin = trim(fgets(STDIN));
    $s = explode(" ", $stdin)[0];
    $t = explode(" ", $stdin)[1];
    print $s[0].".".$t[0];
 ?>
