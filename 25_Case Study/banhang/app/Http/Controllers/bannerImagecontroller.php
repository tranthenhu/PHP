<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bannerImage;
class bannerImagecontroller extends Controller
{
  public function index()
  {
      $banners = bannerImage::all();
      return view('banner.index',compact('banners'));
  }

  public function create()
  {

      return view('banner.create');

  }

  public function store(Request  $request)
  {
      $banners = new bannerImage();
      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $path = $image->store('images', 'public');
          $banners->image = $path;
      }
  
      $banners->save();
      return redirect()->route('banner.index');  
  }

  public function delete($id)
  {
      $banners = bannerImage::findOrFail($id);
      $banners->delete();
      return redirect()->route('banner.index');  
  }
}
