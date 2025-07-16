<?php

    $numbers = [2,3,4,5,6,7,8,9,10];

    $get_sum = function($carry, $item) {
        echo '$carry: ' . $carry . ', $item: ' . $item . "\n";
        return $carry + $item;
    };

    $sum = array_reduce($numbers, $get_sum, 0);

    echo "$sum\n";

?>