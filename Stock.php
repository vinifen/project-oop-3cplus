<?php

class Stock {
    private array $products;
    public function __construct() {
        
    }
    public function add(array $newProducts)
    {
        foreach ($newProducts as $newProduct) {
            $found = false;
            if(isset($this->products)){
                for ($i = 0; $i < count($this->products); $i++) {
                    if ($this->products[$i]["name"] === $newProduct["name"]) {
                        $this->products[$i]["stock"]++;
                        $found = true;
                        break;
                    }
                }
            }    
            if (!$found) {
                $newProduct["stock"] = isset($newProduct["stock"]) ? $newProduct["stock"] : 1;
                $newProduct["price"] = isset($newProduct["price"]) ? $newProduct["price"] : 0;
                $this->products[] = $newProduct;
            }
        }
    }

    public function getByName(string $name)
    {
        echo  $name . "aquiiiii";
        var_dump($this->products);
        foreach ($this->products as $product) {
            if($product["name"] == $name) return $product;
        }
        return null;
    }

    public function all()
    {
        return $this->products;
    }

    public function removeByName(string $name)
    {
        for ($i=0; $i < count($this->products); $i++) { 
            if($this->products[$i]["name"] == $name){
                if ($this->products[$i]["stock"] == 1){
                    unset($this->products[$i]);
                } else {
                    $this->products[$i]["stock"]--;
                }
                return true;
            }
        }
        return false;
    }
}


