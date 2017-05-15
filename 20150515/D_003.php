<?php
    //掛け算のリスト
    $n = trim(fgets(STDIN));
    for($i = 0; $i < 9; $i++) {
        $output = $n * ($i + 1);
        if($i < 9) {
            print($output." ");
        }
        else {
            print($output."\n");
        }
    }
 ?>
