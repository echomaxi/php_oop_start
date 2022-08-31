<?php

class ShopProduct {
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer() {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}

$product1 = new ShopProduct("Собачье сердце", "Булгаков", "Михаил", 5.99);

print "Автор: {$product1->getProducer()} \n";