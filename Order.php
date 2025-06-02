<?php
require_once("Stock.php");
require_once("Human.php");
class Order extends Stock {
    private Human $client;
    private array $products;
    private $total_price;

    public function __construct(Human $client, array $products_name) {
        parent::__construct();
        $productsData = [];
        $totalPrice = 0;
        var_dump($products_name);
        for ($i=0; $i < count($products_name); $i++) { 
            $productData = $this->getByName($products_name[$i]);
            if($productData){
                $totalPrice += $productData["price"];
                array_push($productsData, $productData);
                $this->removeByName($products_name[$i]);
            }
        }
        $this->client = $client;
        $this->products = $productsData;
        $this->total_price = $totalPrice;
    }

    public function get(){
        return [            
            "client" => $this->client, 
            "products" => $this->products,
            "total_price" => $this->total_price
        ];
    }
}

$stock = new Stock();
$stock->add([
    ["name" => "pet shampoo", "price" => 12, "stock" => 15],
    ["name" => "pet toy", "price" => 5, "stock" => 1],
    ["name" => "pet food", "price" => 10, "stock" => 10],
    ["name" => "brocolis", "price" => 12], 
    ["name" => "pet food", "price" => 12],
    ["name" => "pet dresses", "price" => 12, "stock" => 12],
]);
$stock->removeByName("pet food");
var_dump($stock->all());
$person1 = new Human("jorge", 18, "asd", "23412");
$order1 = new Order($person1, ["pet food", "pet toy"]);

var_dump($order1->get());