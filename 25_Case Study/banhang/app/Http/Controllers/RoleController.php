<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RoleController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('role.index',compact('users'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('role.edit',compact('users'));
    }

    public function update(Request $request, $id)
    {
       $users = User::findOrFail($id);
       $users->role = $request->input('role');
       $users->save();
       return redirect()->route('role.index');
    }

    public function delete($id)
    {
      $users = User::findOrFail($id);
      $users->delete();
      return redirect()->route('role.index');
    }
}
