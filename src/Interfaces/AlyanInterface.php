<?php

namespace Src\Interfaces;

/**
 * Interfaz que define operaciones de filtrado y conteo
 * en base a un umbral numérico.
 */
interface AlyanInterface
{
    /**
     * @param array 
     * @param float 
     * @return array 
     */
    public function filterByThreshold(array $items, float $threshold): array;

    /**
     * @param array 
     * @param float 
     * @return int 
     */
    public function countAboveThreshold(array $items, float $threshold): int;
}
