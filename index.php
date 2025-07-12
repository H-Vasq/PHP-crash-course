<?php    

    class User {
        public $name = 'Gord';
        public function greet() {
            return $this->name . ' says Hello !';
        }
    }

    $user1 = new User();

    // echo $user1->name;

    echo $user1->greet()

    
    

?>

