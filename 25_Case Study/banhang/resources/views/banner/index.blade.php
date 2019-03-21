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
          <strong> <h2>danh sách hình banner<h2></strong>
         </tr>
    <a href="{{route('banner.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b>thêm hình mới</a>
        <tr>
            <th>STT</th>
            <th>Image</th>
            <th>ngay them</th>
            <th>ngay update</th>
           
            <th class="text-center">Action</th>
        </tr>
    </thead>
      @foreach ($banners as $key => $banner)
            <tr>
                <td><strong> {{++$key}}</strong></td>
                <td>
                  @if($banner->image)
                   <img style="width: 100px; height: 100px"
                     class="group list-group-image" src="{{ asset('storage/'.$banner->image) }}" alt="" />
                   @else
                      {{'Chưa có ảnh'}}
                   @endif
                </td>
                <td>{{$banner->created_at}}</td>
                <td>{{$banner->updated_at}}</td>
                <td class="text-center">
                      <a class='btn btn-info btn-xs' href="{{route('banner.delete',$banner->id)}}">
                          <span class="glyphicon glyphicon-edit"> </span> 
                            Delete
                      </a> 
                     
                </td>
            </tr>
          @endforeach
    </table>
    </div>
</div>
</div>