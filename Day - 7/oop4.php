<?php
class PrivateCar
{
    private $displacement, $capacity, $mileage;

    public function __construct($displacement, $capacity, $mileage)
    {
        $this->displacement = $displacement;
        $this->capacity     = $capacity;
        $this->mileage      = $mileage;
    }

    public function getDisplacement(){
        return $this->displacement;
    }

    public function setDisplacement($displacement){
        $this->displacement = $displacement;
    }
}
$toyota = new PrivateCar("250cc", "250ltr", "120kph");
