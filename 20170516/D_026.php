<?php
    //一週間の予定
    $holiday = 0;
    for($i = 0; $i < 7; $i++) {
        $stdin = trim(fgets(STDIN));
        if($stdin === "no") {
            $holiday++;
        }
    }
    print $holiday;
 ?>
