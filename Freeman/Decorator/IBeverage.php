<?php
declare(strict_types = 1);

namespace Freeman\Decorator;

interface IBeverage{
    public function getPrice(): int;
    public function getDescription(): string;
}