<?php    
    $create_printer = function() {
        return function() {
            echo "Hello functional!<br><br>";
        };
    };

    $my_printer = $create_printer();
    $my_printer();

?>

