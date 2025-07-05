<?php

    $name = 'Hello World<br><br>';
    $job = 'medic';
    $myJob = 'My job is ' . $job . '<br><br>';
    $serial = 300;
/*
    echo "$name" . "" ."" . "may name is Omar " . "" . "" . "" . "and my job is $job." . "<br><br>";
*/

    $stuff = ["hammer", "nails", "wood", "saw"];

    echo "The type of  is " . gettype($name) . "<br>";
    echo "<br>";
    echo "The type of serial is " . gettype($serial) . "<br><br>";
    echo "<br>";
    echo "The type of stuff is " . gettype($stuff) . "<br><br>";

?>
    