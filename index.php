<?php

    function count_up($x, $max) {
        if ($x > $max) {
            echo "Done! <br>";
            return;
        }

        echo $x . "...<br>";
        count_up($x + 1, $max);
    };

    count_up(0, 10)


?>