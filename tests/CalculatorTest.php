<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

use Nagoyaphp21\App\Operator\Kakeru;
use Nagoyaphp21\App\Operator\Tasu;
use Nagoyaphp21\App\Operator\Waru;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test(): void
    {
        $SUT = new Calculator();
        $this->assertEquals(3, $SUT->calculate([1, 2], [new Tasu()]));
        $this->assertEquals(9, $SUT->calculate([1, 2, 3], [new Tasu(), new Kakeru()]));
    }

    public function test_ゼロ除算(): void
    {
        $this->expectException(\DivisionByZeroError::class);

        $SUT = new Calculator();
        $SUT->calculate([1, 0], [new Waru()]);
    }
}