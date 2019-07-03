<?php

interface BaseAnimal
{
    public function run($name);
}

class Animal implements BaseAnimal{
    private $name;
    public function run($name){
        $this->name = $name;
        echo "Hello {$this->name}";
    }
}

$a = new Animal();
$a->run("shuvo");