<?php
declare(strict_types = 1);

namespace Zandstra\ch10\Decorator;

class Plains implements Tile
{
    private $wealthfactor = 2;

    public function getWealthFactor(): int
    {
        return $this->wealthfactor;
    }
}