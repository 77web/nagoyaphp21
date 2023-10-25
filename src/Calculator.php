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
        $cursor = $inputs[array_key_first($inputs)];
        for ($i = 1; $i < count($inputs); $i++) {
            $operator = array_shift($operatorCombination);
            $cursor = $operator->operate($cursor, $inputs[$i]);
        }

        return $cursor;
    }
}