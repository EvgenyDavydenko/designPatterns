<?php
declare(strict_types = 1);

namespace Freeman\Decorator;

class MilkBeverage extends GoodiesDecorator{
    private $price = 5;
    private $description = ' с молоком';

    public function __construct(IBeverage $beverage)
    {
        parent::__construct($beverage);
    }

    public function getPrice(): int{
        return $this->price + $this->beverage->getPrice(); 
    }

    public function getDescription(): string{
        return $this->beverage->getDescription() . $this->description;
    }
}