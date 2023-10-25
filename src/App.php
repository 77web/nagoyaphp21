<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

class App
{
    public function __construct(
        private readonly OperatorCombinationFactory $operatorCombinationFactory,
        private readonly Calculator $calculator,
        private readonly ExpressionBuilder $expressionBuilder,
    ) {
    }

    /**
     * @param array<int> $inputs
     * @param int $expected
     * @return string|null
     */
    public function run(array $inputs, int $expected): string|null
    {
        $combinations = $this->operatorCombinationFactory->create(count($inputs));

        // TODO: $inputsを並べ替える
        // TODO: 演算子の後ろのかっこに対応

        $expression = null;
        foreach ($combinations as $combination) {
            try {
                if ($this->isEqual($expected, $this->calculator->calculate($inputs, $combination))) {
                    $expression = $this->expressionBuilder->build($inputs, $combination);
                    break;
                }
            } catch (\DivisionByZeroError) {
                // 0除算が発生したらそのcombinationは違うので飛ばす
                continue;
            }
        }

        return $expression;
    }

    // https://github.com/ttskch/nagoyaphp21/blob/main/templates/hard.php#L145-L149
    private function isEqual(int|float $a, int|float $b): bool
    {
        return abs($a - $b) < 0.0001;
    }
}
