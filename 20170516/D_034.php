<?php
    //どれにしようかな
    $menu = "21";
    $stdin = trim(fgets(STDIN));
    $decision = $menu % $stdin;
    print $decision;
 ?>
