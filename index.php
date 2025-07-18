<?php
    $employees = [
        [
            'name' => "John",
            'age' => 43,
            'salary' => 90000,
            'job_title' => 'developer',
        ], [
        
            'name' => "Minny",
            'age' => 33,
            'salary' => 1000,
            'job_title' => 'developer',
        ], [
            'name' => "Barnie",
            'age' => 30,
            'salary' => 50000,
            'job_title' => 'admin',
        ], [
            'name' => "Korina",
            'age' => 20,
            'salary' => 4000,
            'job_title' => 'junior',
        ]
    ];

    $developers = array_filter($employees, fn($x) => $x['job_title'] == 'developer');


    $developer_salaries = array_map(fn($x) => $x['salary'], $developers );

    $total_developer_salaries = array_reduce(
        $developer_salaries,
        fn($carry, $item) => $carry + $item,
    );

    $average_developer_salary = $total_developer_salaries / count($developer_salaries);

    echo "Average dev salary is $average_developer_salary <br><br>";

?>