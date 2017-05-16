<?php
    //台風の間隔]
    $stdin[0] = trim(fgets(STDIN));
    for ($i = 0; $i < 4; $i++) {
        $stdin[$i + 1] = trim(fgets(STDIN));
        print $stdin[$i + 1] - $stdin[$i]."\n";
    }
 ?>
