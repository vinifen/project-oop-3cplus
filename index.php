<?php
require_once("Stock.php");
require_once("Dog.php");
require_once("Rabbit.php");
require_once("Cat.php");
require_once("Human.php");
require_once("Seller.php");
require_once("Clerk.php");
require_once("Veterinarian.php");
require_once("Order.php");



$owner = new Human("George", 30, "123 Animal Street", "555-1234");

$veterinarian = new Veterinarian("Carlos", 27, "123 Street" , "123121");
$seller = new Seller("Jorge", 22, "12322 Street" , "31241");
$clerk = new Clerk("Peter", 30, "98797898 Street" , "807009");
echo $seller->payment() ." seller";
echo $clerk->payment() ." clerk";
echo $veterinarian->payment() ." veterinarian";

$dog = new Dog("Bolt", "Labrador", 4, "Yellow", 30.5, $owner);
$cat = new Cat("Whiskers", "Persian", 4, "White", 4.2, $owner);
$rabbit = new Rabbit("Fluffy", "Mini Rex", 4, "Gray", 1.8, $owner);
$dog->speak();
$cat->speak();
$rabbit->speak();

$stock = new Stock();
$stock->add([
    ["name" => "pet shampoo", "price" => 12, "stock" => 15],
    ["name" => "pet toy", "price" => 5, "stock" => 1],
    ["name" => "pet food", "price" => 10, "stock" => 10],
    ["name" => "brocolis", "price" => 12], 
    ["name" => "pet dresses", "price" => 12, "stock" => 12],
]);

$person1 = new Human("jorge", 18, "asd", "23412");
$order1 = new Order($person1, ["pet food", "pet dresses"], $stock);
$order2 = new Order($person1, ["pet food", "pet toy"], $stock);
$order3 = new Order($person1, ["pet toy"], $stock);

var_dump($stock->all());
var_dump($order1->get());
var_dump($order2->get());
var_dump($order3->get());