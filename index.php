<?php

    function count_down($x) {
        if ($x < 0) {
            echo "Blastoff !";
            return;
        }
        echo $x . "...<br>";
        count_down($x - 1);
    }

    count_down(10);


?>