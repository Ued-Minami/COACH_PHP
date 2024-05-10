<?php

function score( $score1, $score2, $score3) 
{
    $score = $score1 + $score2 + $score3;

    if ($score > 210) {
        echo $score . "点なので合格です";
    } else {
        echo $score . "点なので不合格です";
    }
}
    echo (score(60, 80, 90));
