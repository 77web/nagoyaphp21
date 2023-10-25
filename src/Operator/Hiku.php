<?php

declare(strict_types=1);

namespace Nagoyaphp21\App\Operator;

use Nagoyaphp21\App\OperatorInterface;

class Hiku implements OperatorInterface
{
    public function operate(int $first, int $second): int|float
    {
        return $first - $second;
    }

    public function __toString(): string
    {
        return '-';
    }
}