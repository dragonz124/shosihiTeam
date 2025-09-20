<?php

use PHPUnit\Framework\TestCase;
use Src\Services\AlyanService;

class AlyanServiceTest extends TestCase
{
    public function testFilterByThreshold()
    {
        $service = new AlyanService();
        $result = $service->filterByThreshold([1, 5, 10], 5);
        $this->assertEquals([5, 10], array_values($result));
    }

    public function testCountAboveThreshold()
    {
        $service = new AlyanService();
        $this->assertEquals(2, $service->countAboveThreshold([1, 5, 10], 5));
    }
}
