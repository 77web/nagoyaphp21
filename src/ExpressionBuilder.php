<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

class ExpressionBuilder
{
    public function build(array $inputs, array $operatorCombination): string
    {
        $elements = [];
        foreach ($inputs as $input) {
            $elements[] = $input;
            if (count($operatorCombination) > 0) {
                $elements[] = array_shift($operatorCombination);
            }
        }

        return implode(' ', $elements);
    }
}