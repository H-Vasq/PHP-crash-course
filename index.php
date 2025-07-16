<?php    

    $numbers = [0,1,2,3,4,5,6,7,8,9];

    $doubled_numbers = [];

    $double = function($x) {
        return $x * 2;
    };

    $doubled_numbers = array_map($double, $numbers);

    print_r($doubled_numbers);

?>