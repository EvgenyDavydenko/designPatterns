<?php
declare(strict_types = 1);

namespace Zandstra\ch10\Decorator;

class PollutedTile extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}