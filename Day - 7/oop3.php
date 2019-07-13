<?php

class MotorCycle
{
    private $parameters = [];

    public function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity']     = $capacity;
        $this->parameters['mileage']      = $mileage;
    }

    public function __get($name)
    {
        return $this->parameters[$name];
    }

    public function __set($name, $value)
    {
        $this->parameters[$name] = $value;
    }

}

$pulsar = new MotorCycle("150cc", "15ltr", "40kmph");
echo $pulsar->displacement;
echo $pulsar->mileage;
