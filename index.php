<?php    

    $create_printer = function() {
        $my_favorite_number = 50;

        return function() use ($my_favorite_number) {
            echo "My fav number is $my_favorite_number\n";
        };
    };

        $my_printer = $create_printer();
        $my_printer();


?>