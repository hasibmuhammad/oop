<?php

class ProductCollectionWithInterface implements IteratorAggregate
{
    private $products;

    public function __construct()
    {
        $this->products = array();
    }

    public function add($product)
    {
        array_push($this->products, $product);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->products);
    }

}

$products = new ProductCollectionWithInterface;
$products->add("Laptop");
$products->add("Desktop");
$products->add("Mobile");
$products->add("Microphone");
$products->add("Camera");
$products->add("Whiteboard");

foreach ($products as $product) {
    echo $product . "\n";
}
