<?php    

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $divide = function($x, $y) {
        if ($y == 0) {
            echo "Cannot divide by zero!\n";
            return null;
        }
        return $x / $y;
    };

    $second_arg_isnt_zero = function($func) {
        return function(...$args) use ($func) {
            if ($args[1] == 0) {
                echo "Cannot divide by zero!\n";
                return null;
            }

            return $func(...$args);
        };
    };

    $divide_safe = $second_arg_isnt_zero($divide);

    echo $divide_safe(10, 4) . "<br>";

?>