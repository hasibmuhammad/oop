<?php

class ProductCollection
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

    public function getProducts()
    {
        return $this->products;
    }
}

$products = new ProductCollection;
$products->add("Laptop");
$products->add("Mobile");
$products->add("Earphone");
$products->add("Shoes");

$_products = $products->getProducts();

foreach ($_products as $product) {
    echo "{$product}\n";
}
