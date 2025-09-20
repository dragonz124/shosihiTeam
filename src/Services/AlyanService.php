<?php

namespace Src\Services;

use Src\Interfaces\AlyanInterface;

/**
 * Servicio que implementa operaciones de filtrado
 * y conteo en base a un umbral numérico.
 */
class AlyanService implements AlyanInterface
{
    public function filterByThreshold(array $items, float $threshold): array
    {
        return array_filter($items, fn($item) => $item >= $threshold);
    }

    public function countAboveThreshold(array $items, float $threshold): int
    {
        return count($this->filterByThreshold($items, $threshold));
    }
}
