<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use http\Env\Response;
use Illuminate\Support\Facades\Session;

class categorycontroller extends Controller
{
    
    public function index()
    {
       $categorys = category::all();
       return view('category/list',compact('categorys'));
    }

    public function create()
    {
        return view('category/create');
    }

   
    public function store(Request $request)
    {
        $categorys = new category();
        $categorys->name = $request->input('name');
       
         $categorys->save();
         return redirect()->route('category.index');
    }

  
    public function show($id)
    {
        $categorys = category::findOrFail($id);
        return view('category/show',compact('categorys'));
    }

   
    public function edit($id)
    {
        $categorys = category::findOrFail($id);
        return view ('category/edit',compact('categorys'));
    }

   
    public function update(Request $request, $id)
    {
        $categorys = category::findOrFail($id);
        $categorys->name = $request->input('name');
        $categorys->save();
        return redirect()->route('category.index');
    }

  
    public function destroy($id)
    {
        $categorys = category::findOrFail($id);
        $categorys->delete();
        return redirect()->route('category.index');
    }
}
