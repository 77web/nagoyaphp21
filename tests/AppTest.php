<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    protected App $app;

    protected function setUp(): void
    {
        $this->app = new App();
    }

    public function testIsInstanceOfApp(): void
    {
        $actual = $this->app;
        $this->assertInstanceOf(App::class, $actual);
    }
}
