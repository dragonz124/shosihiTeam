<?php

use PHPUnit\Framework\TestCase;
use Src\Services\LucasService;

class LucasServiceTest extends TestCase
{
    public function testCalculateWeightedSum()
    {
        $service = new LucasService();
        $items = [
            ['value' => 10, 'weight' => 2],
            ['value' => 5, 'weight' => 3]
        ];
        $this->assertEquals(35, $service->calculateWeightedSum($items));
    }

    public function testAverage()
    {
        $service = new LucasService();
        $this->assertEquals(5, $service->average([5, 5, 5]));
        $this->assertEquals(0, $service->average([]));
    }
}
