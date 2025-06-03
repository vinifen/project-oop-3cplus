<?php
require_once("Stock.php");
require_once("Human.php");
class Order {
    private Human $client;
    private array $products;
    private $total_price = 0;
    private $stock;

    public function __construct(Human $client, array $products_name, Stock $stock) {
        $productsData = [];
        $this->stock = $stock;
        for ($i=0; $i < count($products_name); $i++) { 
            $productData = $this->stock->getByName($products_name[$i]);
            
            if($productData){
                $this->total_price += $productData["price"];
                $this->stock->removeByName($products_name[$i]);
                array_push($productsData, $productData);
            }
        }
        $this->client = $client;
        $this->products = $productsData;
    }

    public function get(){
        return [            
            "client" => $this->client, 
            "products" => $this->products,
            "total_price" => $this->total_price
        ];
    }
}
