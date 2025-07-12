<?php    

    class User {
       public $name;
       public $age;

       public function __construct($name, $age) {
        // 
        $this->name = $name;
        $this->age = $age;
       }

       public function greet(){
        return $this->name . "!" . ' Hi, how are you?';
       }
    }

    $user1 = new User('Dougie', 54);

   
    echo $user1->name . ' is ' . $user1->age . ' years old';
    echo '<br><br>';
    echo $user1->greet();
?>

