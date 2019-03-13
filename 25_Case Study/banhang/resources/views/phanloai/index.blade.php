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
         <h3>danh sach loai san pham<h3>
         </tr>
    <a href="{{route('phanloai.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> them loai san pham moi</a>
        <tr>
            <th>STT</th>
            <th>ten</th>
            <th>ngay them</th>
            <th>ngay update</th>
           
            <th class="text-center">Action</th>
        </tr>
    </thead>
      @foreach ($phanloais as $key => $phanloai)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$phanloai->ten}}</td>
                <td>{{$phanloai->created_at}}</td>
                <td>{{$phanloai->updated_at}}</td>
                <td class="text-center">
                      <a class='btn btn-info btn-xs' href="{{route('phanloai.edit',$phanloai->id)}}">
                          <span class="glyphicon glyphicon-edit"> </span> 
                            Edit
                      </a> 
                      <!-- <a href="{{route('phanloai.destroy',$phanloai->id)}}" class="btn btn-danger btn-xs">
                          <span class="glyphicon glyphicon-remove"> </span>
                             Del
                     </a> -->
                </td>
            </tr>
          @endforeach
    </table>
    </div>
</div>
</div>