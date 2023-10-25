<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

use Nagoyaphp21\App\Operator\Kakeru;
use Nagoyaphp21\App\Operator\Waru;

class ExpressionBuilder
{
    public function build(array $inputs, array $operatorCombination): string
    {
        $elements = [];
        foreach ($inputs as $input) {
            $elements[] = $input;
            if (count($operatorCombination) > 0) {
                $op = array_shift($operatorCombination);
                if (($op instanceof Waru || $op instanceof Kakeru) && count($elements) > 1) {
                    array_unshift($elements, '(');
                    $elements[] = ')';
                }
                $elements[] = $op;
            }
        }

        return implode(' ', $elements);
    }
}