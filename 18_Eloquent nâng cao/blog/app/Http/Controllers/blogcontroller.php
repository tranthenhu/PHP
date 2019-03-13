<?php


namespace App\Http\Controllers;
use App\blog;
use App\category;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class blogcontroller extends Controller
{
   
    public function index()
    {
       $blogs = blog::paginate(2);
       $categorys = category::all();
       return view ('index',compact(['blogs', 'categorys']));
    }

    
    public function create()
    {
        $categorys = category::all();
       return view('create',compact('categorys'));
    }

   
    public function store(Request $request)
    {
        $blogs = new blog();
        $blogs->title  = $request->input('title');
        $blogs->contain = $request->input('contain');
        $blogs->category_id = $request->input('category_id');
        $blogs->save();
        return redirect()->route('index');  
    }

    public function show($id)
    {
        $blogs = blog::findOrFail($id);
        return view('show',compact('blogs'));
    }

    public function edit($id)
    {
        $blogs = blog::findOrFail($id);
        return view('edit',compact('blogs'));
    }

   
    public function update(Request $request, $id)
    {
        $blogs = blog::findOrFail($id);
        $blogs->title = $request->title;
        $blogs->contain = $request->contain;
        $blogs->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = blog::findOrFail($id);
        $blogs->delete();
         return redirect()->route('index');
    }
    public function find(Request $request)
    {
        $finds = $request->valuefind;
        $blogs = blog::find ($finds);
        print_r($blogs);
        // return view('showfind',compact('blogs'));
    }
}
