<?php    

    $person_data = [
        'name' => 'Bryce',
        'age'=> 34,
    ];

    $career_data = [
        'job' => 'developer',
        'salary' => 245,
    ];

    $person_with_career_data = array_merge(
        $person_data,
        $career_data,
    );

    print_r($person_with_career_data);
?>