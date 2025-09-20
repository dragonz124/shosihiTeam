<?php

use PHPUnit\Framework\TestCase;
use Src\Services\LucasService;
use Src\Services\AlyanService;
use Src\Services\AlanService;
use Src\Services\IntegratorService;

class IntegratorIntegrationTest extends TestCase
{
    public function testIntegration()
    {
        $lucas = new LucasService();
        $alyan = new AlyanService();
        $alan = new AlanService();
        $integrator = new IntegratorService($lucas, $alyan, $alan);

        $data = [1, 5, 10, 20];
        $result = $integrator->integrate($data);

        $this->assertArrayHasKey('average', $result);
        $this->assertArrayHasKey('filtered', $result);
        $this->assertArrayHasKey('formatted', $result);
        $this->assertArrayHasKey('summary', $result);
        $this->assertGreaterThan(0, $result['average']);
    }
}
