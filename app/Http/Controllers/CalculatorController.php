<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function addition($x, $y)
    {
        return $x + $y;
    }

    public function subtraction($x, $y)
    {
        return $x - $y;
    }

    public function multiplication($x, $y)
    {
        return $x * $y;
    }

    public function division($x, $y)
    {
        return $x / $y;
    }
}
