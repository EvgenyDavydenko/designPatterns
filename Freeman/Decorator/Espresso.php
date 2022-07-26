<?php
declare(strict_types = 1);

namespace Freeman\Decorator;

class Espresso implements IBeverage{
    private $price = 50;
    private $description = 'кофе Espresso';

    public function getPrice(): int{
        return $this->price; 
    }

    public function getDescription(): string{
        return $this->description;
    }
}