<?php
declare(strict_types = 1);

namespace Zandstra\ch10\Decorator;

class DiamondTile extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}