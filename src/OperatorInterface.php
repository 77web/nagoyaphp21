<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

interface OperatorInterface extends \Stringable
{
    public function operate(int $first, int $second): int|float;
}