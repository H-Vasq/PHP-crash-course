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

    foreach($team01 as $tMember) {
        
        if($tMember['type'] == 'technician') {
            echo "This is a" . " " . "Tech";
        };
    }
   
?>
    