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

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_age() {
        return $this->age;
    }

    public function set_birthday( $b ) {
        $this->birthday = $b;
        $this->update_age();
    }

    private function update_age() {
        $this->age = ($this->birthday) ? ++$this->age : $this->age;
    }
}



?>