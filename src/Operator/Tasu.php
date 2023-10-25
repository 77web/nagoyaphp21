<?php

declare(strict_types=1);

namespace Nagoyaphp21\App\Operator;

use Nagoyaphp21\App\OperatorInterface;

class Tasu implements OperatorInterface
{
    public function operate(int|float $first, int|float $second): int|float
    {
        return $first + $second;
    }

    public function __toString(): string
    {
        return '+';
    }
}