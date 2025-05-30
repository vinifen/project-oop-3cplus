<?php
class Human {
    public function __construct(
        protected $name,
        protected $age,
        protected $address,
        protected $contact,
    ) {}

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getContact() {
        return $this->contact;
    }
}
