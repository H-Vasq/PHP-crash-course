<?php    

    class User {
        public $name = 'Honda';

        public function greet() {
            return 'Hello';
        }
    }

    $user1 = new User();

    echo $user1->name . " is saying " . $user1->greet() . "." . "<br />";
    
    $user2 = new User();
    $user2->name = "Susan";
    
    echo $user2->name . " is saying " . $user1->greet() . "." . "<br />";
?>
