<?php

interface BaseAnimal
{
    public function eat();
}

interface Animal extends BaseAnimal
{
    public function sleep();
    public function run();
}

class Cat implements Animal
{
    public function eat()
    {

    }
    public function sleep()
    {

    }
    public function run()
    {

    }
}
