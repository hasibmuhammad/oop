<?php

class Planet
{
    public static function echoName()
    {
        echo self::getName();
    }

    public static function getName()
    {
        return "Planet";
    }
}

class Earth extends Planet
{
    static function getName()
    {
        return "Earth";
    }
}

Earth::echoName();
