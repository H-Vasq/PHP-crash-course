<?php

$colors = ['red', 'green', 'blue', 'yellow'];

for ($i = 0; $i < sizeof($colors); $i++) {
    echo $colors[$i] . "<br>";
}

foreach( $colors as $color ) {
    echo "$color <br>";
}

$home_towns = [
    'Joe' => 'Echo, NY',
    'Erma' => 'Charlie, AZ',
    'Oscar' => 'Lima, PA',
    'Ynez' => 'Delta, OR',
];

foreach( $home_towns as $name => $town) {
    echo "$name lives in $town <br>";
}

?>