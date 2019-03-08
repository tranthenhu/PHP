@extends('home')
@section('title', 'Danh sách Blog')
@section('content')
     <div class="col-12">
           <div class="row">
               <div class="col-12"><h1>Danh sách Blog</h1></div>
               <div class="col-12">
                   @if (Session::has('success'))
                      <p class="text-success">
                         <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                      </p>
                   @endif
               </div>
          <table class="table table-striped">
          <thead>
          <tr>
                <th scope="col">STT</th>
                <th scope="col">Title</th>
                
                <th scope="col">Content</th>
                <th scope="col">Anh</th>
               
                <th></th>
                <th></th>
          </tr>
          </thead>
          <tbody>
          @if(count($tasks) == 0)
          <tr><td colspan="4">Không có dữ liệu</td></tr>
          @else
                @foreach($tasks as $key => $task)
                <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td>{{ $task->title }}</td>
                      <td>{{ $task->content }}</td>
              
                      <td>
                        @if($task->image)
                        <img src="{{ asset('storage/'.$task->image) }}" alt="" style="width: 100px; height: 100px">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                      <td><a href="{{ route('tasks.edit', $task->id) }}">[ sửa ]</a></td>
                      <td><a href="{{ route('tasks.destroy', $task->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">[ xóa ]</a></td>
                </tr>
                @endforeach
          @endif
          </tbody>
          </table>
      
          <td><a class="btn btn-primary" href="{{ route('tasks.create') }}">Thêm mới</a></td>
        
          {{ $tasks->links() }}
        
          </div>
      </div>
@endsection