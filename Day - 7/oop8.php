<?php

class Car
{
    private $attributes = [];

    public function __construct($color, $displacement, $weight)
    {
        // $this->attributes["tiresize"] = $tireSize;
        $this->attributes["color"]        = $color;
        $this->attributes["displacement"] = $displacement;
        $this->attributes["weight"]       = $weight;
    }

    public function __get($name)
    {
        return $this->attributes[$name];
    }

    public function __isset($name)
    {
        if (!isset($this->attributes[$name])) {
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

    public function __call($name, $arguments)
    {
        if ('run' == $name) {
            if ($arguments) {
                echo "I am running at {$arguments[0]}\n";
            } else {
                echo "I am running!\n";
            }
        }
    }

    public static function __callStatic($name, $arguments)
    {
        if ("eat" == $name) {
            if ($arguments) {
                echo "I am eating rice with my {$arguments[0]}";
            }else{
                echo "I am eating";
            }
        }
    }

}

$c = new Car("Gray", "250cc", "2000kg");

$c->run("200kmph");
$c::eat("Father");
