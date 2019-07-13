<?php
class Car
{
    private $properties = [];

    public function __construct($color, $mileage, $displacement)
    {
        $this->properties['color']        = $color;
        $this->properties['mileage']      = $mileage;
        $this->properties['displacement'] = $displacement;
    }

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __unset($name)
    {
        print_r($this->properties);
        unset($this->properties[$name]);
        print_r($this->properties);
    }
}
$c = new Car("white", "250kph", "200cc");
unset($c->color);
