<?php    

    class User {
        public $name;
        public $type;

        public function __construct() {
            echo 'constructor ran...';
        }

        public function greet() {
            return $this->name . ' This car is for SALE';
        }
    }

    $user1 = new User();
    
?>
