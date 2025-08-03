<?php

// function add_two($a) {
//     return $a + 2;
// }

// $a = 2;
// echo add_two($a);


function double(&$b)

{
    $b *= 2;
}

$b = 9;
double($b);

echo "<br> $b <br>";

?>