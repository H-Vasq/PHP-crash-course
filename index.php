<?php    

    class User {
       public $name;
       public $age;

       public function __construct() {
        echo 'constructor ran...';
       }

       public function greet(){
        return $this->name . ' Hi, how are you?';
       }
    }

    $user1 = new User();

    $user2 = new User();
   

    

?>

