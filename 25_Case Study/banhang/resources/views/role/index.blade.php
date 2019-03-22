@include('layout.head')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div id="categories-list" class="row list-group">

<div class="item  col-xs-12 col-lg-12">
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
         <tr>
          <strong> <h2>danh sach account<h2></strong>
         </tr>
        <tr>
            <th>STT</th>
            <th>ten</th>
            <th>email</th>
            <th>role</th>
           
            <th class="text-center">Action</th>
        </tr>
    </thead>
      @foreach ($users as $key => $user)
         @if ($user->role < 2)
            <tr>
                <td><strong> {{$key++}}</strong></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td align='center'>{{$user->role}}</td>
                <td class="text-center">
                      <a class='btn btn-info btn-xs' href="{{route('role.edit',$user->id)}}">
                          <span class="glyphicon glyphicon-edit"> </span> 
                            Edit
                      </a> 
                      <a href="{{route('role.delete',$user->id)}}" class="btn btn-danger btn-xs">
                          <span class="glyphicon glyphicon-remove"> </span>
                             Del
                     </a> 
                </td>
            </tr>
            @endif
          @endforeach
    </table>
    </div>
</div>
</div>