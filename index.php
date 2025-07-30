<?php

$turtle = '';
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

$bandana = match ($turtle) {
    'leo' => 'red02',
    'raph' => 'yellow-green',
    'don' => 'orange',
    default => 'gray'
};

echo "$bandana <br>"

?>