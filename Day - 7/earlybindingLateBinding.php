<?php

class Color
{
    public static function echoColor()
    {
        echo static::getColor();
    }

    public static function getColor()
    {
        return "Red";
    }
}

class AnotherColor extends Color
{   
    public static function getColor()
    {
        return "Orange";
    }
}

AnotherColor::echoColor();
