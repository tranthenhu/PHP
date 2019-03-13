<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function create()
  {
      return view('post.create');
  }
  
    public function store(Request $request)
    {
      $validatedData = $request->validate([
          'number' => 'required|numeric',
      ]);
      echo 'đã xác thực thành công';
    }
  }
