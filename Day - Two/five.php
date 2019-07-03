<?php

class Shape{

}

class Shapes
{
    private $shapes;

    public function __construct()
    {
        $this->shapes = [];
    }

    public function addShape(Shape $shape)
    {
        array_push($this->shapes, $shape);
    }

    public function totalShapes()
    {
        return count($this->shapes);
    }
}

class Square extends Shape
{

}

class Circle extends Shape
{

}

class Student extends Shape
{

}

$shapesCollection = new Shapes();
$shapesCollection->addShape(new Square());
$shapesCollection->addShape(new Circle());
// $shapesCollection->addShape(new Student());

echo $shapesCollection->totalShapes();
