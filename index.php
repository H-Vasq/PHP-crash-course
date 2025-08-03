<?php

$colors = ['red', 'green', 'blue', 'yellow'];

for ($i = 0; $i < sizeof($colors); $i++) {
    echo $colors[$i] . "<br>";
}

foreach( $colors as $color ) {
    echo "$color <br>";
}

?>