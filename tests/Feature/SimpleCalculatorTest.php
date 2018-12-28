<?php

namespace Tests\Feature;

use App\Http\Controllers\CalculatorController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SimpleCalculatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalculator()
    {
        $result = new CalculatorController();
        $this->assertEquals(11, $result->addition(5,6));
        $this->assertEquals(28, $result->addition(20, 8));
        $this->assertEquals(50, $result->addition(4, 46));
        $this->assertEquals(40, $result->subtraction(41, 1));
        $this->assertEquals(2, $result->subtraction(10, 8));
        $this->assertEquals(40, $result->multiplication(8, 5));
        $this->assertEquals(24, $result->multiplication(6,4));
        $this->assertEquals(8, $result->division(40,5));
        $this->assertEquals(10, $result->division(100, 10));
    }
}
