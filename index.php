<?php    

    class User {
        public $name;
        public $type;

        public function __construct($name, $type) {
            // echo 'constructor ran...';

            $this->name = $name;
            $this->type = $type;

        }

        public function greet() {
            return $this->name . ' car is for SALE';
        }
    }

    $user1 = new User('Honda', 'Sport');

    echo $user1->name . " " . "is" . " " . "a" . " " . $user1->type . " " . "vehicle" . "." . "<br /><br />";
    echo $user1->greet();
?>
