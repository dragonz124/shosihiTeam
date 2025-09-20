<?php

namespace Src\Services;

use Src\Interfaces\IntegratorInterface;

/**
 * Servicio que integra los resultados de Lucas, Alyan y Alan.
 */
class IntegratorService implements IntegratorInterface
{
    private LucasService $lucas;
    private AlyanService $alyan;
    private AlanService $alan;

    public function __construct(LucasService $lucas, AlyanService $alyan, AlanService $alan)
    {
        $this->lucas = $lucas;
        $this->alyan = $alyan;
        $this->alan = $alan;
    }

    public function integrate(array $data): array
    {
        $average = $this->lucas->average($data);
        $filtered = $this->alyan->filterByThreshold($data, $average);
        $formatted = $this->alan->formatNumbers($filtered);
        $summary = $this->alan->sumAndLabel($filtered);

        return [
            'average' => $average,
            'filtered' => $filtered,
            'formatted' => $formatted,
            'summary' => $summary,
        ];
    }
}
