<?php    

    class User {
        public $name = 'Gord';
        public function greet() {
            return $this->name . ' says Hello !';
        }
    }

    $user1 = new User();

    $user2 = new User();
    $user2->name = 'Susan';

    echo '<br>';
    echo $user2->greet();
    echo '<br>';
    echo '<br>';
    echo $user1->greet();

    

?>

