<?php
    //掛け算のリスト
    $n = trim(fgets(STDIN));
    for($i = 1; $i <= 9; $i++) {
        $output = $n * $i;
        if($i < 9) {
            print($output." ");
        }
        else {
            print($output."\n");
        }
    }
 ?>
