<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbjadController extends Controller
{

    public function index (){
        return view('huruf.index');
    }

    public function cek(Request $request)
    {
        $input1 = $request->input('input1');
        $input2 = $request->input('input2');
    
        $input1 = strtolower($input1);
        $input2 = strtolower($input2);
    
        $hitungChar = count(array_intersect(str_split($input1), str_split($input2)));
        
        $totalChar = strlen($input1);
    
        $periksa = ($hitungChar / $totalChar) * 100;
    
        return view('huruf.index', ['periksa' => $periksa]);
    }
}
