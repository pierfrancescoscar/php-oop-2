<?php

class User {

    public $name;
    public $lastName;
    public $age;
    public $sale;

    public function __construct($name, $lastName, $age, $sale) {

        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->sale = $sale;

    }

    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAge() {
        return $this->age;
    }


    public function setSale() {
        if ($this->age < 25) {
            $this->sale = 10;
        } elseif ($this->age > 35) {
            $this->sale = 20;
        } else { 
            $this->sale = 0;
        }
    }

    public function getSale() {
        $this->setSale();
        return $this->sale;
    }

}

?>