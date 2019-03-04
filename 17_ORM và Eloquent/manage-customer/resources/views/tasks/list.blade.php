@extends('home')
@section('title', 'Danh sách khách hàng')
@section('content')
     <div class="col-12">
           <div class="row">
               <div class="col-12"><h1>Danh Sách Khách Hàng</h1></div>
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
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
               
                <th></th>
                <th></th>
          </tr>
          </thead>
          <tbody>
          @if(count($tasks) == 0)
          <tr><td colspan="4">Không có dữ liệu</td></tr>
          @else
                @foreach($tasks as $key => $customer)
                <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td>{{ $customer->title }}</td>
                      <td>{{ $customer->content }}</td>
              
                      <td>
                        @if($customer->image)
                        <img src="{{ asset('storage/'.$customer->image) }}" alt="" style="width: 100px; height: 100px">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                      <td><a href="{{ route('tasks.edit', $customer->id) }}">sửa</a></td>
                      <td><a href="{{ route('tasks.destroy', $customer->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
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