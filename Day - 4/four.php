<?php
class Constant
{
    const CITY = "DHAKA";

    public function getCity(){
        echo $this::CITY;
    }

    public function hello(){
        echo "hello world!";
    }

    public function world(){
        echo "I am in the world!";
        $this::hello();
    }
}
$c = new Constant();
$c->world();
