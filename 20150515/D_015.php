<?php
    //カウントダウン
    $stdin = trim(fgets(STDIN));
    for($i = 0; $i < $stdin; $i++) {
        print $stdin - $i."\n";
    }
 ?>
