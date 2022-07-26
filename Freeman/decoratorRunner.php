<?php
declare(strict_types = 1);

namespace Freeman\Decorator;

require __DIR__ . '/../autoload.php';

class Runner
{

    public static function espresso()
    {
        $beverage = new Espresso();
        print $beverage->getDescription() . ': ' . $beverage->getPrice() . " у.е\n"; 
    }

    public static function decaf()
    {
        $beverage = new Decaf();
        print $beverage->getDescription() . ': ' . $beverage->getPrice() . " у.е\n"; 
    }

    public static function espressoWithMilkWithMocha()
    {
        $beverage = new MochaBeverage(new MilkBeverage(new Espresso()));
        print $beverage->getDescription() . ': ' . $beverage->getPrice() . " у.е\n";
    }

    public static function decafWithMilkWithMilkWithMocha()
    {
        $beverage = new MochaBeverage(new MilkBeverage(new MilkBeverage(new Decaf())));
        print $beverage->getDescription() . ': ' . $beverage->getPrice() . " у.е\n";
    }
}

Runner::espressoWithMilkWithMocha();
Runner::decafWithMilkWithMilkWithMocha();
