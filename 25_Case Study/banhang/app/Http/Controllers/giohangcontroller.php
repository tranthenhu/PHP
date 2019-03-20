<?php

namespace App\Http\Controllers;
use App\giohang;
use App\sanpham;
use App\phanloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class giohangcontroller extends Controller
{
 
    public function index()
    {   $tonggiatien = 0;
        $user = auth()->user();	
        $giohangs = $user->sanphams;
        foreach($giohangs as $giohang)
        {
           $tonggiatien += (($giohang->gia)*($giohang->pivot->soluong));
        }
        return view('giohang.index', compact('giohangs','tonggiatien'));
    }

    
   
    public function add(Request $request, $id)
    {
       $user = auth()->user();	
       $sanpham= sanpham::findOrFail($id);
       $soluongs = $request->input('soluong');
       $user->sanphams()->attach($sanpham,['soluong'=>$soluongs]);
       return redirect()->route('sanpham.index');
    }

    public function destroy($giohang)
    {
        $user = auth()->user();	
        $user->detach($giohang);
        return redirect()->route('giohang.index');
    }
}
