<?php

include_once './Interfaces/Mailable.php';

class Person implements Mailable{
    private $name;
    private $surname;
    private $adress;
    private $mail;

    public function __construct($name, $surname, $adress, $mail)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->adress = $adress;
        $this->mail = $mail;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function sendMail($mail)
    {
        echo 'Kullanıcıya mail gonderildi mail adresi : ' . $mail .'<br>';
    }
}
