<?php
namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use http\Env\Response;
use Illuminate\Support\Facades\Storage;
class TaskController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $tasks = Task::paginate(4);
     
      return view('tasks.list', compact('tasks'));
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('tasks.create');
  }
  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $task = new Task();
      $task->title = $request->input('title');
      $task->content = $request->input('content');
      
      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $path = $image->store('images', 'public');
          $task->image = $path;
      }
     
      $task->save();
      
      Session::flash('success', 'Tạo mới thành công');
      
      return redirect()->route('tasks.index');
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $task = Task::findOrFail($id);
      return view('tasks.edit', compact('task'));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
      $task = Task::findOrFail($id);
      $task->title = $request->input('title');
      $task->content = $request->input('content');
      
      if ($request->hasFile('image')) {
          
          $currentImg = $task->image;
          if ($currentImg) {
              Storage::delete('/public/' . $currentImg);
          }
         
          $image = $request->file('image');
          $path = $image->store('images', 'public');
          $task->image = $path;
      }
     
      $task->save();
    
      Session::flash('success', 'Cập nhật thành công');
    
      return redirect()->route('tasks.index');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $task = Task::findOrFail($id);
      $image = $task->image;
  
      if ($image) {
          Storage::delete('/public/' . $image);
      }
      $task->delete();
     
      Session::flash('success', 'Xóa thành công');
    
      return redirect()->route('tasks.index');
  }
}