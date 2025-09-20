<?php

namespace Src\Services;

use Src\Interfaces\LucasInterface;

/**
 * Servicio que implementa operaciones matemáticas básicas
 * como sumas ponderadas y promedios.
 */
class LucasService implements LucasInterface
{
    public function calculateWeightedSum(array $items): float
    {
        $sum = 0;
        foreach ($items as $item) {
            $sum += $item['value'] * $item['weight'];
        }
        return $sum;
    }

    public function average(array $items): float
    {
        if (count($items) === 0) {
            return 0;
        }
        return array_sum($items) / count($items);
    }
}
