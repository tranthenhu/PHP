<?php

namespace App\Http\Controllers;
use App\sanpham;
use App\phanloai;
use App\giohang;
use App\bannerImage;
use Illuminate\Http\Request;
use App\Http\Requests\FormExampleRequest;
class sanphamicontroller extends Controller
{
   
    public function index()
    {
        $sanphams = sanpham::paginate(8);
        return view('welcome',compact('sanphams'));
    }

   
    public function create()
    {
        $phanloais = phanloai::all();
        return view('sanpham.create',compact('phanloais'));

    }

    
    public function store(FormExampleRequest  $request)
    {
        $sanphams = new sanpham();
        $sanphams->ten  = $request->input('ten');
        $sanphams->gia = $request->input('gia');
        $sanphams->chitiet = $request->input('chitiet');
        $sanphams->phanloai_id = $request->input('phanloai_id');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $sanphams->image = $path;
        }
    
        $sanphams->save();
        return redirect()->route('sanpham.index');  
    }

    
    public function show($id)
    {
       $sanphams = sanpham::findOrFail($id);
       return view('sanpham.show',compact('sanphams'));
    }

    
    public function edit($id)
    {
        $phanloais = phanloai::all();
        $sanphams = sanpham::findOrFail($id);
        return view('sanpham.edit',compact('sanphams','phanloais'));
    }

  
    public function update(FormExampleRequest $request, $id)
    {
        $sanphams = sanpham::findOrFail($id);
        $sanphams->ten  = $request->input('ten');
        $sanphams->gia = $request->input('gia');
        $sanphams->chitiet = $request->input('chitiet');
        $sanphams->phanloai_id = $request->input('phanloai_id');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $sanphams->image = $path;
        }
    
        $sanphams->save();
        return redirect()->route('sanpham.index');  
    }

   
    public function delete($id)
    {
        $sanphams = sanpham::findOrFail($id);
        $sanphams->delete();
        return redirect()->route('sanpham.index');  
    }

    public function find(Request $request)
    {
        $ten = $request->find;
        $ten=str_replace(' ', '%', $ten);
        $sanphams=sanpham::where('ten','like','%'.$ten.'%')->get();
        return view('showFind',compact('sanphams'));
    }

     public function main()
    {   
        $bannerImages = bannerImage::all();
        return view('main',compact('bannerImages'));
    }
}

