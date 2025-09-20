<?php

namespace Src\Interfaces;

/**
 * Interfaz que define la integración de resultados
 * entre los distintos servicios.
 */
interface IntegratorInterface
{
    /**
     * @param array 
     * @return array 
     */
    public function integrate(array $data): array;
}
