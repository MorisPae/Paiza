<?php
    //ミニ・コンピュータ
    $x = 0;
    $y = 1;
    $n = trim(fgets(STDIN));
    if (1 <= $n && $n <= 10) {
        for ($i = 0; $i < $n; $i++) {
            $s = trim(fgets(STDIN));
            $command = explode(" ", $s)[0];
            if ($command == "SET" && explode(" ", $s)[1] === "1") {
                $x = explode(" ", $s)[2];
            }
            elseif ($command === "SET" && explode(" ", $s)[1] === "2") {
                $y = explode(" ", $s)[2];
            }
            elseif ($command === "ADD") {
                $y = $x + explode(" ", $s)[1];
            }
            elseif ($command === "SUB") {
                $y = $x - explode(" ", $s)[1];
            }
        }
        print ("$x $y");
    }
 ?>
