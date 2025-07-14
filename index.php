<?php    

    $double = function($x) {
        return $x * 2;
    };

    $subtract_one = function($x) {
        return $x - 1;
    };

    $add_three = function($x) {
        return $x + 3;
    };

    $my_number = 42;

    $function_array = [
        $double,
        $subtract_one,
        $add_three,
    ];

    // $doubled = $double($my_number);

    // $doubled_minus_one = $subtract_one($doubled);

    // $plus_three = $add_three($doubled_minus_one);

?>

