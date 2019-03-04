<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

  <h1>Danh sách khách hàng</h1>
  <a href="{{route('create')}}" > [ them ]</a>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Họ và tên</th>
        <th>bod</th>
        <th>sửa/xóa<th>
      </tr>
    </thead>
    <tbody>
      @foreach($list as $lists) 
      <tr>
        <td>{{$lists['id']}}</td>
        <td>{{$lists['name']}}</td>   
        <td>{{$lists['bod']}}</td>
        <td>
          <a href="{{ Route('edit', ['id' => {{$lists}} ] )}}">Sửa</a> | 
        </td>
        </tr>
       @endforeach
      </tbody>
    </table>
  </body>
  </html>


