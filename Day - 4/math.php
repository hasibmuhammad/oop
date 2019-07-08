<?php

class MathCalculator
{
    static $number;
    static $name;

    static public function fibonacchi($n)
    {
        self::$name;
        echo "Fibonacchi series of number is upto {$n}\n";
    }

    public function factorial($n)
    {
        self::fibonacchi(2);
        echo "Factorial is calculating!";
    }
}

$new = new MathCalculator();
$new->fibonacchi(1);

MathCalculator::factorial(2);
