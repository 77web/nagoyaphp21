<?php

declare(strict_types=1);

namespace Nagoyaphp21\App;

// 順序あり重複あり組み合わせを作るのでCombinationだと数学的にミスリーディングかも
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
        $combinations = $this->makeCombination([]);
        for ($i = 0; $i < $targetElementsCount - 2; $i++) {
            $tmpCombinations = [];
            foreach ($combinations as $combination) {
                $tmpCombinations = array_merge($tmpCombinations, $this->makeCombination($combination));
            }
            $combinations = $tmpCombinations;
        }

        return $combinations;
    }

    /**
     * @param array<OperatorInterface> $seed
     * @return array<array<OperatorInterface>>
     */
    private function makeCombination(array $seed): array
    {
        $combinations = [];
        foreach ($this->allOperators as $operator) {
            $combinations[] = array_merge($seed, [$operator]);
        }

        return $combinations;
    }
}