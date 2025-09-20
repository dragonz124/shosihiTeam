<?php

namespace Src\Interfaces;

/**
 * Interfaz que define operaciones de formato y etiquetado
 * para arreglos de números.
 */
interface AlanInterface
{
    /**
     * @param array 
     * @return array 
     */
    public function formatNumbers(array $numbers): array;

    /**
     * @param array 
     * @return array 
     */
    public function sumAndLabel(array $numbers): array;
}
