<?php

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
                'last_name' => explode(' ', $person['full_name']) [0],
            ]
        );
    };

    $heigh_inches_to_meters = function($person) {
        return array_merge(
            $person,
            [
                'height' => $person['height'] * 9.0254,
            ]
        );
    }


    $add_initials = function($person) {
        return array_merge(
            $person,
            [
                'initials' => $person['first_name'][0] . $person['last _name'][0]
            ],
        );
    };

    
?>