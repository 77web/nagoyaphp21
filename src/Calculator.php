<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

class Calculator
{
    /**
     * @param array<int> $inputs
     * @param array<OperatorInterface> $operatorCombination
     * @return int|float
     */
    public function calculate(array $inputs, array $operatorCombination): int|float
    {
        $cursor = 0;
        foreach ($inputs as $input) {
            if ($cursor === 0) {
                $cursor += $input;
            } else {
                $operator = array_shift($operatorCombination);
                $cursor = $operator->operate($cursor, $input);
            }
        }

        return $cursor;
    }
}