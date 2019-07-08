<?php
class Person{
    
    private $name;
    private $age;
    private $color;

    public function __construct($name = "", $age = "", $color = "")
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;    
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }
}

$p = new Person("shuvo",16);
$p->setAge(20);
echo $p->getAge();