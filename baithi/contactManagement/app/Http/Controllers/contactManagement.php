<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;
use App\Http\Requests\validateData;
class contactManagement extends Controller
{
    public function index()
    {
        $managers = Manager::all();
        return view('manager.index',compact('managers'));
    }

    public function viewCreate()
    {
        
        return view('manager.create');
    }

    public function add(validateData $request)
    {
        $managers = new Manager();
        $managers->ten  = $request->input('ten');
        $managers->ho = $request->input('ho');
        $managers->sodienthoai = $request->input('sodienthoai');
        $managers->email = $request->input('email');
        $managers->diachi = $request->input('diachi');
        $managers->save();
        return redirect()->route('index');  
    }


    public function viewEdit($id)
    {
        $managers = Manager::findOrFail($id);
        return view('manager.edit',compact('managers'));
    }


    public function update(validateData $request,$id)
    {
        $managers = Manager::findOrFail($id);
        $managers->ten  = $request->input('ten');
        $managers->ho = $request->input('ho');
        $managers->sodienthoai = $request->input('sodienthoai');
        $managers->email = $request->input('email');
        $managers->diachi = $request->input('diachi');
        $managers->save();
        return redirect()->route('index');  
    }

    public function findName(Request $request)
    {
        $ten = $request->find;
        $ten=str_replace(' ', '%', $ten);
        $managers=Manager::where('ten','like','%'.$ten.'%')->get();
        return view('manager.showFind',compact('managers'));
    }

    public function findHo(Request $request)
    {
        $ho = $request->find;
        $ho=str_replace(' ', '%', $ho);
        $managers=Manager::where('ho','like','%'.$ho.'%')->get();
        return view('manager.showFind',compact('managers'));
    }

    public function delete($id)
    {
        $managers = Manager::findOrFail($id);
        $managers->delete();
        return redirect()->route('index'); 
    }


}
