<?php

class PrivateCar
{
    private $attributes = [];

    public function __construct($displacement, $capacity, $mileage)
    {
        $this->attributes['displacement'] = $displacement;
        $this->attributes['capacity']     = $capacity;
        $this->attributes['mileage']      = $mileage;
    }

    public function __get($name)
    {
        return $this->attributes[$name];
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }
}
$p = new PrivateCar("120cc", "80ltr", "50kph");
echo $p->displacement;
$p->displacement = "100cc";
