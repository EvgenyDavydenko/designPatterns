<?php
declare(strict_types = 1);

namespace Zandstra\ch10\Decorator;

require __DIR__ . '/../../autoload.php';

class Runner
{

    public static function plains()
    {
        $tile = new Plains();
        print $tile->getWealthFactor(); // 2
    }

    public static function diamondPlains()
    {
        $tile = new DiamondTile(new Plains());
        print $tile->getWealthFactor(); // 4
    }

    public static function pollutedDiamondPlains()
    {
        $tile = new PollutedTile(new DiamondTile(new Plains()));
        print $tile->getWealthFactor(); // 0
    }
}

Runner::diamondPlains();
Runner::pollutedDiamondPlains();
