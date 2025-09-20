<?php

use PHPUnit\Framework\TestCase;
use Src\Services\AlanService;

class AlanServiceTest extends TestCase
{
    public function testFormatNumbers()
    {
        $service = new AlanService();
        $result = $service->formatNumbers([1.234, 5.678]);
        $this->assertEquals(['1.23', '5.68'], $result);
    }

    public function testSumAndLabel()
    {
        $service = new AlanService();
        $result = $service->sumAndLabel([1, 2, 3]);
        $this->assertEquals(6, $result['sum']);
        $this->assertStringContainsString("La suma total es 6", $result['label']);
    }
}
