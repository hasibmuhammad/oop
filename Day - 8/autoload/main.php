<?php
function __autoload($name){
    include "{$name}.php";
}
$space = new SpaceShip();
$space->spaceship();
