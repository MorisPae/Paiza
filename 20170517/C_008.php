<?php
    //文字列の抽出
    //開始タグと終了タグを受け取り分割
    $tags = trim(fgets(STDIN));
    $A = explode(" ", $tags)[0];
    $B = explode(" ", $tags)[1];

    //文字列を受け取り開始タグと終了タグの最初の文字の位置を検索
    $S = trim(fgets(STDIN));
    $start_tag = strpos($S, $A);
    $end_tag = strpos($S, $B);

    //タグで挟まれた文字列の表示
    while($start_tag !== false && $end_tag !== false && $start_tag < $end_tag) {
        if ($start_tag + strlen($A) == $end_tag) {
            print "<blank>\n";
        }
        else {
            print substr($S, $start_tag + strlen($A), $end_tag - ($start_tag + strlen($A)))."\n";
        }
        //使ったタグを削除し、残りの文字列のみ更新
        $S = substr($S, $end_tag + strlen($B));
        $start_tag = strpos($S, $A);
        $end_tag = strpos($S, $B);
    }
 ?>
