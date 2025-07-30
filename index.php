<?php

$turtle = 'raph';
$bandana = '';

switch ($turtle) {
    case 'leo':
        $bandana = 'blue';
    case 'raph':
        $bandana = 'red';
    case 'don':
        $bandana = 'purple';
    default:
        $bandana = 'yellow';
    }

echo "$turtle's bandana is $bandana! <br>";

?>