<?php

namespace App\Http\Controllers;
use App\giohang;
use App\sanpham;
use App\phanloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class giohangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();	
        $giohangs = $user->sanphams;
        
        return view('giohang.index', compact('giohangs'));
    }

    
   
    public function add(Request $request, $id)
    {
       $user = auth()->user();	
       $sanpham= sanpham::findOrFail($id);
       $soluongs = $request->input('soluong');
       $user->sanphams()->attach($sanpham,['soluong'=>$soluongs]);
       return redirect()->route('sanpham.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bill(Request $request)
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($giohang)
    {
        $user = auth()->user();	
        $user->detach($giohang);
        return redirect()->route('giohang.index');
    }
}
