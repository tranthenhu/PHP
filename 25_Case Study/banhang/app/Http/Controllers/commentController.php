<?php

namespace App\Http\Controllers;

use App\comment;
use App\giohang;
use App\sanpham;
use App\phanloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class commentController extends Controller
{
    
    public function add(Request $request, $id)
    {
       $user = auth()->user();	
       $sanpham= sanpham::findOrFail($id);
       $username = $user->name;
       $comments = $request->input('comment');
       $user->sanphamsComment()->attach($sanpham,['comment'=>$comments,'username'=>$username]);
       return redirect()->back();
    }

    public function delete($id)
    {   
        $comments= comment::findOrFail($id);
        $comments->delete();
        return redirect()->back();
    }
}
