<?php
    //本棚並び
    $stdin = trim(fgets(STDIN));
    $n = explode(" ", $stdin)[0];
    $d = explode(" ", $stdin)[1];
    $e = explode(" ", $stdin)[2];
    $bookshelf_width = $d * $e;
    if($n <= $bookshelf_width) {
        print "OK";
    }
    else {
        print "NG";
    }
 ?>
