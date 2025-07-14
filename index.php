<?php    
    $create_printer = function() {
        return function() {
            echo "Hello functional!<br><br>";
        };
    };

    $my_printer = $create_printer();
    $my_printer();

    // $double = function($x) {
    //     return $x * 2;
    // };

    // $triple = function($x) {
    //     return $x * 3;
    // };

    // $quadruple = function($x) {
    //     return $x * 4;
    // };

    $create_multiplier = function($y) {
        return function($x) use ($y) {
            return $x * $y;
        };
    };

    $double = $create_multiplier(2);
    $triple = $create_multiplier(3);
    $quadruple = $create_multiplier(4);
    
    echo $triple(13);
?>

