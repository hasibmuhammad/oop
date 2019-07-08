<?php

interface BaseAnimal
{
    public function canEat();
    public function canRun();
    public function canBreed();
}

class Animal implements BaseAnimal
{
    public function canEat()
    {
        echo "Yes, I can eat!";
    }

    public function canRun()
    {
        echo "Yes, I can Run or Walk!";
    }

    public function canBreed()
    {
        echo "Yes, I can Breed!";
    }
}

interface BaseHuman extends BaseAnimal{
    public function isHuman();
}

class Human implements BaseHuman{

    public function canEat()
    {
        echo "Yes, I can eat!";
    }

    public function canRun()
    {
        echo "Yes, I can Run or Walk!";
    }

    public function canBreed()
    {
        echo "Yes, I can Breed!";
    }

    public function isHuman()
    {
        echo "Yes, I am a human!";
    }
}

$h = new Animal();
echo $h instanceof BaseAnimal;
