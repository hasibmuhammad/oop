<?php

class Person
{
    private $name;
    private $age;
    private $color;

    public function __construct($name = "", $age = "", $color = "")
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = strtoupper($value);
    }
}

$p = new Person("Shuvo",16);
$p->name = "akash";
echo $p->name;
