<?php

namespace App\Http\Controllers;
use App\giohang;
use App\sanpham;
use App\phanloai;
use Illuminate\Http\Request;

class giohangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giohangs = giohang::all();
        $tonggiatien = 0;
        foreach($giohangs as $giohang){
            $soluong = $giohang->soluong;
            $giatien = $giohang->sanpham->gia;
            $tonggia1sanpham = $soluong * $giatien;
            $tonggiatien = $tonggiatien +$tonggia1sanpham;
            
        }
        return view('giohang.index',compact('giohangs','tonggiatien'));
    }

    
   
    public function add(Request $request, $id)
    {
       $sanphams = sanpham::findOrFail($id);
       $giohangs = new giohang();
       $giohangs->ten = $sanphams->ten;
       $giohangs->soluong = $request->input('soluong');
       $giohangs->sanpham_id = $sanphams->id;
       
       $giohangs->save();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $giohangs = giohang::findOrFail($id);
        $giohangs->delete();
        return redirect()->route('giohang.index');
    }
}
