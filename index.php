<?php

class Person {
    var $first_name;
    var $age;
    var $birthday = false;

    function __construct( $first_name, $age )
    {
        $this->first_name = $first_name;
        $this->age = $age;
    }

    
}

?>