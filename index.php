<?php    

    $names_1 = [
        'john',
        'betty',
        'thomas',
    ];

    $names_2 = [
        'Peter',
        'Diana',
        'Carl',
    ];

    $all_names = [
        ...$names_1,
        ...$names_2,
    ];

    print_r($all_names);

?>