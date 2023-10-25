<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

use Nagoyaphp21\App\Operator\Hiku;
use Nagoyaphp21\App\Operator\Kakeru;
use Nagoyaphp21\App\Operator\Tasu;
use Nagoyaphp21\App\Operator\Waru;
use PHPUnit\Framework\TestCase;

class OperatorCombinationFactoryTest extends TestCase
{
    public function test_2(): void
    {
        $actual = $this->getSUT()->create(2);
        $this->assertCount(4, $actual); // 4^1
    }

    public function test_3(): void
    {
        $actual = $this->getSUT()->create(3);
        $this->assertCount(16, $actual); // 4^2
    }

    public function test_4(): void
    {
        $actual = $this->getSUT()->create(4);
        $this->assertCount(64, $actual); // 4^3
    }

    private function getSUT(): OperatorCombinationFactory
    {
        return new OperatorCombinationFactory([
            new Tasu(),
            new Hiku(),
            new Kakeru(),
            new Waru(),
        ]);
    }
}