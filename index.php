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
        'Rima',
        ...$names_1,
        'Cole',
        ...$names_2,
        'Mario',
    ];

    print_r($all_names);

?>