<?php

class User {

    protected $name;
    protected $lastName;
    protected $age;
    protected $sale;

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
             return $this->sale = 10;
        } elseif ($this->age > 35) {
             return $this->sale = 20;
        } else { 
             return $this->sale = 0;
        }
    }

    public function getSale() {
        $this->setSale();
        return $this->sale;
    }

}

?>