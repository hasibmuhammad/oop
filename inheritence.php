<?php

class Human
{
    protected $name;

    public function __construct($name = "")
    {
        $this->name = $name;
    }

    public function run()
    {
        echo "I am running!";
    }

    public function eat()
    {
        echo "I am running!";
    }

    public function sleep()
    {
        echo "I am sleeping!";
    }

    public function greet()
    {
        echo "Hi there from {$this->name}!";
    }

    public function SayHi()
    {
        echo "HI from {$this->name}\n";
    }

    protected function addTitle($title){
        $this->name = $title . " ". $this->name;
    }
}

class Animal extends Human
{
    public function SayHi()
    {
        $this->addTitle("Mr.");
        echo "{$this->name} Says HI from {$this->name} \n";
    }
}
$a = new Animal("CAT");
$a->SayHi();

$h = new Human("Shuvo");
$h->SayHi();
