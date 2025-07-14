<?php    

    $add = function($x, $y) {
        return $x + $y;
    };

    $subtract = function($x, $y) {
        return $x - $y;
    };

    $combine_2_and_3 = function($func) {
        return $func(2, 3);
    };

    echo $combine_2_and_3($add) . "\n<br><br>";
    echo $combine_2_and_3($subtract) . "\n";

?>

