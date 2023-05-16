<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $weight = $request->input('weight');
        $height = $request->input('height');

        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
            $bmiCategory = 'Underweight';
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $bmiCategory = 'Normal weight';
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            $bmiCategory = 'Overweight';
        } elseif ($bmi >= 30) {
            $bmiCategory = 'Obesity';
        }

        return redirect()->route('profile.index')->with(compact('bmi', 'bmiCategory'));
    }
}
