<?php

class ShopProduct {

    public function __construct(
        public $title,
        public $producerFirstName,
        public $producerMainName,
        public $price
        ) {
    }

    public function getProducer() {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}

$product1 = new ShopProduct("Собачье сердце", "Булгаков", "Михаил", 5.99);

print "Автор: {$product1->getProducer()} \n";