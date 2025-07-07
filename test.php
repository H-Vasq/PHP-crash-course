<?php

    $deptA = [
        "name" => "Tom",
        "type" => "technician",
        "serialID" => 0000333
    ];
   
    $deptB = [
        "name" => "Sara",
        "type" => "medic",
        "serialID" => 0000453
    ];

    $team01 = [$deptA, $deptB];

    echo("Tech from A is " . $deptA['name']);
   
?>
    