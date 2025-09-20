<?php

namespace Src\Interfaces;

/**
 * Interfaz que define operaciones matemáticas básicas
 * relacionadas con sumas ponderadas y promedios.
 */
interface LucasInterface
{
    /**
     * @param array 
     * @return float 
     */
    public function calculateWeightedSum(array $items): float;

    /**
     * @param array 
     * @return float 
     */
    public function average(array $items): float;
}
