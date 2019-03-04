<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 
class customer extends Controller
{
    public function index(){
        return view ('index');
    }

    public function them(){
        return view ('them');
    }

    public function add(Request $request){
      
   
         customer::create(Request::all());
     
        return redirect('index');
    }
    
}
