<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

class OperatorCombinationFactory
{
    /**
     * @param array<OperatorInterface>
     */
    public function __construct(
        private array $allOperators,
    ) {
    }

    public function create(int $targetElementsCount): array
    {
        // TODO
        return [array_slice($this->allOperators, 0, $targetElementsCount - 1)];
    }
}