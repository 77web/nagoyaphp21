<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

use Nagoyaphp21\App\Operator\Hiku;
use Nagoyaphp21\App\Operator\Kakeru;
use Nagoyaphp21\App\Operator\Tasu;
use Nagoyaphp21\App\Operator\Waru;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @dataProvider provideTestData
     */
    public function test(array $inputs, int $expected): void
    {
        $app = new App(
            new OperatorCombinationFactory([new Tasu(), new Hiku(), new Waru(), new Kakeru()]),
            new Calculator(),
            new ExpressionBuilder(),
        );
        $expression = $app->run($inputs, $expected);

        $this->assertNotNull($expression);
        echo $expression.PHP_EOL;
    }

    public static function provideTestData(): array
    {
        return [
            [[6, 3, 2, 2], 10],
//            [[8, 0, 4, 6], 10],
//            [[1, 9, 2, 5], 10],
//            [[3, 3, 2, 1], 10],
//            [[4, 4, 6, 8], 10],
//            [[9, 9, 9, 9], 10],
//            // 以下は簡易版では解けなかった問題
//            [[4, 0, 6, 8], 10],
//            [[9, 5, 2, 1], 10],
//            [[1, 3, 2, 3], 10],
//            [[6, 4, 8, 4], 10],
//            [[3, 4, 7, 8], 10],
//            [[1, 1, 5, 8], 10],
//            // 以下は動画内で実際に出題されていた問題
//            [[2, 5, 5, 9], 13],
//            [[4, 8, 8, 9], 23],
//            [[3, 5, 8, 9], 24],
//            [[1, 3, 5, 7], 19],
//            [[1, 2, 2, 6, 6, 9], 16],
//            [[2, 3, 4, 6, 8, 9], 9],
//            [[1, 2, 3, 3, 3, 9], 13],
//            [[1, 4, 5, 6, 6, 6], 9],
//            [[1, 1, 4, 6, 6, 8], 17],
//            [[4, 4, 5, 7, 8], 16],
//            [[3, 3, 4, 7], 25],
//            [[2, 2, 6, 8, 9], 17],
//            [[1, 8, 9, 9], 16],
//            [[2, 5, 5, 6, 6, 8], 15],
//            [[2, 2, 3, 6, 8], 12],
//            [[6, 6, 7, 8, 9], 22],
//            [[1, 6, 8, 8], 18],
//            [[3, 3, 4, 8], 19],
//            [[5, 7, 8, 9], 20],
//            [[2, 2, 4, 6, 7, 9], 13],
//            [[5, 6, 9, 9], 8],
//            [[1, 2, 3, 4, 8, 9], 22],
//            [[1, 2, 7, 8], 17],
//            [[1, 1, 3, 6, 9], 14],
//            [[2, 6, 7, 9], 21],
//            [[2, 4, 6, 7], 23],
//            [[1, 4, 4, 6, 8], 12],
//            [[1, 3, 5, 9], 14],
//            [[1, 1, 3, 5, 5, 7], 24],
//            [[1, 2, 2, 3, 6, 9], 25],
//            [[3, 4, 5, 6, 6], 23],
//            [[1, 4, 7, 9], 14],
//            [[2, 4, 6, 7, 8], 17],
//            [[2, 3, 7, 8], 23],
//            [[6, 6, 7, 8, 9], 22],
//            [[1, 2, 7, 7, 8], 10],
//            [[1, 3, 3, 4, 6, 8], 15],
//            [[2, 2, 5, 6], 12],
//            [[1, 6, 8, 8], 18],
//            [[1, 3, 4, 6], 13],
//            [[2, 6, 6, 8, 8], 19],
//            [[3, 4, 4, 9], 11],
//            [[1, 2, 6, 9], 10],
//            [[1, 4, 6, 9], 17],
//            [[4, 7, 8, 8], 10],
//            [[1, 6, 8, 9], 18],
//            [[3, 4, 6, 8], 18],
//            [[1, 2, 4, 8, 9], 13],
//            [[3, 7, 8, 8], 18],
//            [[1, 2, 3, 3, 6], 18],
//            [[5, 6, 7, 8], 21],
//            [[4, 5, 9, 9, 9], 17],
//            [[5, 6, 7, 9], 19],
//            [[1, 3, 4, 8, 8, 9], 14],
//            [[3, 6, 6, 8], 21],
//            [[1, 2, 7, 7, 8], 17],
//            [[2, 3, 6, 6], 19],
        ];
    }
}
