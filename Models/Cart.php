<?php

include_once 'Product.php';
include_once 'Person.php';
class Cart  {

    private $products;
    private $person;
    private $total;


    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getPerson()
    {
        return $this->person;
    }

    public function addProduct(Product $product){

        $this->products[] = $product;
        echo $product->getName() . ' ürünü eklendi. Fiyatı: '. $product->getPrice().' <br>';
        echo '<br>';
    }

    public function verify(){
        $tot=0;
        if  ($this->getPerson()->getAdress() != null )
        {
            foreach( $this->getProducts() as $product){
                $tot=$tot+$product->getPrice();
            }
            $this->total=$tot;
        }
        else {
            echo 'Missing Adress Information';
        }
        $this->info();
    }

    public function info(){
        echo 'Kullanıcı Bilgileri : ';


    }

}