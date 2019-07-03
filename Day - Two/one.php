<?php
class ParentClass
{
    public function __consturct()
    {
        $this->SayHi();
    }

    public function SayHi()
    {
        echo "Hi";
    }
}

class ChildClass extends ParentClass
{
    public function SayHi()
    {
        echo "Hello";
    }
}

$childClass = new ChildClass();
$childClass->SayHi();


