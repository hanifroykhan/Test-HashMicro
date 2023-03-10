<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.index');
    }

    public function hitung(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operator');

        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $num1 + $num2;
                break;
            case '-':
                $hasil = $num1 - $num2;
                break;
            case '*':
                for ($i = 1; $i <= $num2; $i++) {
                    for ($j = 1; $j <= $num1; $j++) {
                        $hasil++;
                    }
                }
                break;
            case '/':
                if ($num2 != 0) {
                    $hasil = $num1 / $num2;
                } else {
                    return redirect()->back()->with('error', 'Pembagian 0 tidak diperbolehkan');
                }
                break;
            default:
                return redirect()->back()->with('Terjadi Kesalahan');
        }

        return view('kalkulator.index', ['hasil' => $hasil]);
    }
}
