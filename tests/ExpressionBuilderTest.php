<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

use Nagoyaphp21\App\Operator\Hiku;
use Nagoyaphp21\App\Operator\Tasu;
use PHPUnit\Framework\TestCase;

class ExpressionBuilderTest extends TestCase
{
    public function test(): void
    {
        $SUT = new ExpressionBuilder();
        $this->assertEquals('1 + 2 - 3', $SUT->build([1, 2, 3], [new Tasu(), new Hiku()]));
    }
}