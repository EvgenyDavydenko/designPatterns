<?php
declare(strict_types = 1);

namespace Freeman\Decorator;

class MochaBeverage extends GoodiesDecorator{
    private $price = 3;
    private $description = ' с пенкой';

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