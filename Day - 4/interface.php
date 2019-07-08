<?php

class DistrictCollection implements IteratorAggregate
{
    private $districts;

    public function __construct()
    {
        $this->districts = array();
    }

    public function add($district)
    {
        array_push($this->districts, $district);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;

$districts->add("Rajshahi");
$districts->add("Khulna");
$districts->add("Comilla");
$districts->add("Sylhet");

foreach ($districts as $district) {
    echo $district . "\n";
}
