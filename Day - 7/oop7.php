<?php

class Car
{
    private $attributes = [];

    public function __construct($color, $displacement, $weight)
    {
        // $this->attributes["tiresize"] = $tireSize;
        $this->attributes["color"] = $color;
        $this->attributes["displacement"] = $displacement;
        $this->attributes["weight"] = $weight;
    }

    public function __get($name){
        return $this->attributes[$name];
    }

    public function __isset($name)
    {
        if(!isset($this->attributes[$name])){
            echo "{$name} Not Found\n";
            return false;
        }
        return true;
    }

    public function __unset($name)
    {
        print_r($this->attributes);
        unset($this->attributes[$name]);
        print_r($this->attributes);
    }

}

$c = new Car("Gray", "250cc", "2000kg");
if(isset($c->tiresize)){
    echo $c->tiresize;
}
unset($c->displacement);