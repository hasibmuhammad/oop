<?php
class HHuman{
    public $food;
    public $name;
    public $age;

    public function __construct($personName="John", $personAge)
    {
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi(){
        echo "Assalamu alaikum! ";
        $this->greet();
        $this->food = "Rice";
        printf("\nPlease take your {$this->food}!");
    }
    
    function greet(){
        echo "Hi {$this->name}, please take your seat!\n";
        echo "I am {$this->age} years old!";
    }
}

class Cat{
    function sayHi(){
        echo "Meaw";
    }
}

$human = new HHuman("Shuvo",21);
$human->sayHi();
 


