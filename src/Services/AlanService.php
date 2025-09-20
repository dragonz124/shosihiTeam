<?php

namespace Src\Services;

use Src\Interfaces\AlanInterface;

/**
 * Servicio que implementa operaciones de formato
 * y etiquetado de arreglos numéricos.
 */
class AlanService implements AlanInterface
{
    public function formatNumbers(array $numbers): array
    {
        return array_map(fn($num) => number_format($num, 2), $numbers);
    }

    public function sumAndLabel(array $numbers): array
    {
        $sum = array_sum($numbers);
        return [
            'sum' => $sum,
            'label' => "La suma total es {$sum}"
        ];
    }
}
