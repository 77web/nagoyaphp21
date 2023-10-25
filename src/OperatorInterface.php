<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

interface OperatorInterface
{
    public function operate(int $first, int $second): int|float;
}