<?php 
require_once("Animal.php");

class Rabbit extends Animal {
    public function __construct(
        string $name,
        string $breed,
        int $leg_number,
        string $color,
        float $weight,
        Human $human
    ) {
        parent::__construct($name, $breed, $leg_number, $color, $weight, $human);
    }

    public function speak() {
        echo "nheiinheiinehi";
    }
}