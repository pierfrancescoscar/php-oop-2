<?php

require_once __DIR__ . '/User.php';

class PremiumUser extends User {

    protected $sale;

    public function __construct($name, $lastName, $age, $email, $gender, $sale)
    {
        parent::__construct($name, $lastName, $age, $email, $gender, $sale);
        $this->sale = $sale;
    }

}

?>