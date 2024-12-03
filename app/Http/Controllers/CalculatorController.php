<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide',
        ]);

        $number1 = $validated['number1'];
        $number2 = $validated['number2'];
        $operation = $validated['operation'];

        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'subtract':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                if ($number2 == 0) {
                    $result = 'Error: Division by zero';
                } else {
                    $result = $number1 / $number2;
                }
                break;
        }

        return view('calculator', compact('result'));
    }
}
