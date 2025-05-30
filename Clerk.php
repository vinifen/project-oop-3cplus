<?php

require_once("Employee.php");

class Clerk extends Employee {
    public function __construct(protected $name, protected $age, protected $address, protected $contact) {
        parent::__construct($name, $age, $address, $contact);
    }

    public function payment()
    {
        return 1500;
    }
}