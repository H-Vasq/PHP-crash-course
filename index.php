<?php

    function compose(...$functions) {
    return function($value) use ($functions) {
        foreach (array_reverse($functions) as $fn) {
            $value = $fn($value);
        }
        return $value;
    };
}


    $people_data = [
        [
            'full_name' => 'Ed Johnson',
            'age' => 28,
            'height' => 74
        ], [
            'full_name' => 'Jennie Jones',
            'age' => 44,
            'height' => 78
        ], [
            'full_name' => 'Sunny Daives',
            'age' => 58,
            'height' => 65
        ]
    ];

    $with_first_and_last_name = function($person) {
        return array_merge(
            $person,
            [
                'first_name' => explode(' ', $person['full_name']) [0],
                'last_name' => explode(' ', $person['full_name']) [1],
            ]
        );
    };

    $heigh_inches_to_meters = function($person) {
        return array_merge(
            $person,
            [
                'height' => $person['height'] * 0.0254,
            ]
        );
    };


    $add_initials = function($person) {
        return array_merge(
            $person,
            [
                'initials' => $person['first_name'][0] . $person['last_name'][0]
            ]
        );
    };

    $format_person = compose(
        $with_first_and_last_name,
        $heigh_inches_to_meters,
        $add_initials,
    );

    $formatted_people = array_map($format_person, $people_data);

    $format_person = compose(
    $add_initials,
    $heigh_inches_to_meters,
    $with_first_and_last_name
);

$formatted_people = array_map($format_person, $people_data);

print_r($formatted_people);
?>