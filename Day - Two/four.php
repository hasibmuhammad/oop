<?php

abstract class Myclass
{
    final public function doSomething()
    {
        echo "I am doing something!";
    }
}

class Ourclass extends Myclass
{
    
}

$oc = new Ourclass();
$oc->doSomething();
