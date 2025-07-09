<?php    

    class User {
        public $name = 'Honda';

        public function greet() {
            return 'Hello';
        }
    }

    $user1 = new User();

    echo $user1->name . " is saying " . $user1->greet() . "." ;
?>
