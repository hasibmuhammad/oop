<?php
class MotorCycle
{
    private $displacement, $capacity, $mileage;

    public function __construct($displacement, $capacity, $mileage)
    {
        $this->displacement = $displacement;
        $this->capacity     = $capacity;
        $this->mileage      = $mileage;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }

    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }
}

$pulsur = new MotorCycle("150cc", "16ltr", "40kmph");
echo $pulsur->getDisplacement();

