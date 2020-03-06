<?php

use App\Models\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testIfCalculatorAddsUp()
    {
        $calculator = new Calculator();
        $this->assertEquals(3, $calculator->add(1, 2));
    }
}
