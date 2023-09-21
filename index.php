<?php

include './Models/DigitalProduct.php';
include './Models/PhysicalProduct.php';
include './Models/Cart.php';
include './Interfaces/Downloadable.php';
include './Interfaces/Shippable.php';
include_once './Models/Product.php';
include_once './Models/Person.php';

$product1 =new DigitalProduct('Patika',150,'patika.com');
$product2 =new PhysicalProduct('Computer',1000,2000);

$product3 =new DigitalProduct('Udemy',120,'udemy.com');
$product4 =new PhysicalProduct('Mouse',80,10);

$product5 =new DigitalProduct('BTKAkademi',1000,'btkakademi.com');
$product6 =new PhysicalProduct('Keyboard',350,30);

$product7 =new PhysicalProduct('Earphones',600,12);
$product8 =new PhysicalProduct('Speaker',450,15);


$person1 = new Person("Zeynep","Şahin","Ankara","zeynep@hotmail.com");
$person2 = new Person("Fatma","Kütükoğlu","İstanbul","fatma@hotmail.com");
$person3 = new Person("Aysu","Gür","Bursa","aysu@hotmail.com");
$person4 = new Person("Elif","Şahin","İzmir","elif@hotmail.com");


$cart1 = new Cart($person1);
$cart1->addProduct($product1);
$cart1->addProduct($product2);
$cart1->verify();

$cart2 = new Cart($person2);
$cart2->addProduct($product3);
$cart2->addProduct($product4);
$cart2->verify();

$cart3 = new Cart($person3);
$cart3->addProduct($product5);
$cart3->addProduct($product6);
$cart3->verify();

$cart4 = new Cart($person4);
$cart4->addProduct($product7);
$cart4->addProduct($product8);
$cart4->verify();


$person1->sendMail($person1->getMail());
$person2->sendMail($person2->getMail());
$person3->sendMail($person3->getMail());
$person4->sendMail($person4->getMail());





