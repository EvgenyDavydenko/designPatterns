<?php
declare(strict_types = 1);

namespace Zandstra\ch10\Decorator;

interface Tile
{
    public function getWealthFactor(): int;
}