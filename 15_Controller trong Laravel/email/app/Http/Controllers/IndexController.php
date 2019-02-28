<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $value = $request->value;
        $giatri =0;
        if ($value == "cong"){
            $giatri = $num1 + $num2;
        } else if ($value == "tru"){
            $giatri = $num1 - $num2;
        } else if ($value == "nhan"){
            $giatri = $num1 * $num2;
        } else if ($value == "chia"){
            $giatri = $num1 / $num2;
        }
       
        return view('index', compact('giatri'));
    }
    
}
