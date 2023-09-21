<?php

include_once './Models/Product.php';
class DigitalProduct extends Product {
    private $downloadLink;

    public function __construct($name ,$price ,$downloadLink)
    {
        parent::__construct($name, $price);
        $this->setDownloadLink($downloadLink);
    }

    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
    }


}