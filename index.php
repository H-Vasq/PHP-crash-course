<?php    

    class User {
       public $name;
       public $age;

       public function __construct($name, $age) {
        // 
        $this->name = $name;
        $this->age = $age;
       }

       public function getName(){
        return $this->name;
       }

       public function setName($name) {
        $this->name = $name;
       }
    }

    $user1 = new User('Joanna', 25);

    echo $user1->setName('Roxanne');
    echo $user1->getName();


?>

