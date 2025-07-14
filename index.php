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

    $my_number = 60;

    $function_array = [
        $double,
        $subtract_one,
        $add_three,
    ];

    for ($i = 0; $i < count($function_array); $i += 1) {
        $my_number = $function_array[$i]($my_number);

    echo $my_number . "\n";

    }

    // $doubled = $double($my_number);

    // $doubled_minus_one = $subtract_one($doubled);

    // $plus_three = $add_three($doubled_minus_one);

?>

