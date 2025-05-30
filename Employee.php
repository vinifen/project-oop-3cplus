<?php 
require_once("Human.php");

class Employee extends Human {
    public function __construct(protected $name, protected $age, protected $address, protected $contact) {
        parent::__construct($name, $age, $address, $contact);
    }

    public function payment(){}
}