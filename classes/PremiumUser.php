<?php

require_once __DIR__ . '/User.php';

class PremiumUser extends User {

    public $sale;

    public function __construct($name, $lastName, $age, $sale) {
    
        parent::__construct($name, $lastName, $age, $sale);
        $this->sale = $sale;
    }

    public function setSale() {
        if ($this->age < 25) {
             return $this->sale = 50;
        } elseif ($this->age > 35) {
            return $this->sale = 60;
        } else {
             return $this->sale = 30;
        }
    }

}

?>