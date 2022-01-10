<!-- Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi. -->

<?php

class User {

    public $name;
    public $lastName;
    public $age;
    public $email;
    public $gender;

    public function __construct($name, $lastName, $age, $email, $gender){

        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
        $this->gender = $gender;

    }


}

$user1 = new User('Pierfrancesco', "Scarinci", 27, 'scarincipierfrancesco@gmail.com', 'Male');
var_dump($user1);

?>