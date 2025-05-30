<?php
require_once("Human.php");

class Animal {

    public function __construct(
        protected $name,
        protected $breed,
        protected $leg_number,
        protected $color,
        protected $weight,
        protected Human $human,
    ) {}

    public function getName() {
        return $this->name;
    }

    public function getBreed() {
        return $this->breed;
    }

    public function getLegNumber() {
        return $this->leg_number;
    }

    public function getColor() {
        return $this->color;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getHuman(): Human {
        return $this->human;
    }

    public function speak() {}
}
