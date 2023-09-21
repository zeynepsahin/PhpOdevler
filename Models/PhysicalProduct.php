<?php

include_once './Models/Product.php';
class PhysicalProduct extends Product {

    private $weight;


    public function __construct($name, $price, $weight)
    {
        parent::__construct($name, $price);
        $this->setWeight($weight);
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

}