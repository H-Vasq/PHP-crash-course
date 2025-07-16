<?php    
    $letters = ['a', 'b', 'c', 'd', 'e'];
    $numbers = [0,1,2,3,4,5,6,7,8,9];

    $pairs = array_map(
        fn($letter, $numbers) => "$letter$number",
        $letters,
        $numbers,
    );

    print_r($pairs);
?>