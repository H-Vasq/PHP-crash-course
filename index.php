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

    $add = function(...$args) {
        $sum = 0;
        for ($i = 0; $i < count($args); $i += 1) {
            $sum += $args[$i];
        }
        return $sum;
    };

    echo $add(1,2,3,4,5) . "\n";
?>