<?php
declare(strict_types = 1);

namespace Freeman\Decorator;

class Decaf implements IBeverage{
    private $price = 40;
    private $description = 'кофе Decaf';

    public function getPrice(): int{
        return $this->price; 
    }

    public function getDescription(): string{
        return $this->description;
    }
}