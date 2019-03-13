<?php

namespace App\Http\Controllers;
use App\phanloai;
use App\sanpham;
use Illuminate\Http\Request;

class phanloaicontroller extends Controller
{
  
    public function index()
    {
        $phanloais = phanloai::all();
        return view('phanloai.index',compact('phanloais'));
    }

  
    public function create()
    {
       return view("phanloai.create");
    }

   
    public function store(Request $request)
    {
        $phanloais = new phanloai();
        $phanloais->ten = $request->input('ten');
        $phanloais->save();
        return redirect()->route('phanloai.index');
 
    }

   
    public function edit($id)
    {
        $phanloais = phanloai::findOrFail($id);
        return view('phanloai.edit',compact('phanloais'));
    }

   
    public function update(Request $request, $id)
    {
       $phanloais = phanloai::findOrFail($id);
       $phanloais->ten = $request->input('ten');
       $phanloais->save();
       return redirect()->route('phanloai.index');
    }

   
    // public function destroy($id)
    // {
    //     $phanloais = phanloai::findOrFail($id);
    //     $tenloai = $phanloais->id;
     
    //     $danhsach=sanpham::where('phanloai_id',$tenloai)->orderBy('id','desc')->get();
    //     $danhsach->delete();
    //     $phanloais->delete();
    //     return redirect()->route('phanloai.index');

    // }
}
