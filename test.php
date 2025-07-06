<?php

    $mecha = [
        "name" => "Gundam",
        "type" => "Mobile Suit",
        "abilities" => ["Beam Rifle", "Shield", "Hyper Mode"],
        "pilot" => [
            "name" => "Amuro Ray",
            "age" => 16,
            "skills" => ["Piloting", "Combat", "Strategy"]
        ]
    ];

    $num = 0;

    foreach($mecha as $key => $val) {
        // echo "$key. $val <br />";
        print_r("$key. $val <br />");
    }
?>
    