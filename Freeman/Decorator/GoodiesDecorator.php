<?php
declare(strict_types = 1);

namespace Freeman\Decorator;

abstract class GoodiesDecorator implements IBeverage
{
    protected $beverage;

    public function __construct(IBeverage $beverage)
    {
        $this->beverage = $beverage;
    }
}