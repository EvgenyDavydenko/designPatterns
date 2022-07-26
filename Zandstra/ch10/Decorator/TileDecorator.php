<?php
declare(strict_types = 1);

namespace Zandstra\ch10\Decorator;

abstract class TileDecorator implements Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}