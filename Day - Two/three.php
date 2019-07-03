<?php

abstract class Myclass
{
    abstract public function setHello();
    abstract public function getHello();
}

class Ourclass extends Myclass
{
    public function setHello()
    {
        echo "Hello world!";
    }

    public function getHello()
    {
        echo "Hi there!";
    }
}
$o = new Ourclass();
$o->setHello();