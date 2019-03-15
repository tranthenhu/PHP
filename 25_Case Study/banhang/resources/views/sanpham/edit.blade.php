@include('layout.head')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
  <div class="row">
  <h4>sửa sản phẩm</h4>
  @if ($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{ $nameError }}</p>
        @endforeach
    @endif
 <div class="col col-md-2"></div>
    <div class="col col-md-8">
  <form method="post" action="{{route('sanpham.update',$sanphams->id)}}" enctype='multipart/form-data'>
  @csrf
  <div class="form-group required">
    <label for="exampleInputEmail1" class='control-label'>tên sản phẩm</label>
    <input type="text"  name='ten' class="form-control"  aria-describedby="emailHelp"value="{{$sanphams->ten}}">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group required">
    <label for="exampleInputPassword1" class='control-label'>giá</label>
    <input type="number" name='gia' min="1000" class="form-control"  value="{{$sanphams->gia}}">
  </div>
  <div class="form-group required">
    <label for="exampleSelect1" class='control-label'>loại</label>
    <select   name="phanloai_id" class="form-control" >
       @foreach( $phanloais as $phanloai)
      <option value="{{ $phanloai->id }}" >{{ $phanloai->ten }}</option>
     @endforeach
    </select>
  </div>

  <div class="form-group required">
    <label for="exampleTextarea" class='control-label'>chi tiết</label>
    <textarea name='chitiet'class="form-control" id="exampleTextarea" rows="7" value="{{$sanphams->chitiet}}"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputFile">hình</label>
    <input type="file" name='image' class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <!--<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>-->
  </div>
  
    <ul class="media-date text-uppercase reviews list-inline">
    <li class="mm"><button type="submit" class="btn btn-primary">thêm</button></li>
    
  </ul>
</form>
</div>
  <div class="col col-md-2"></div>

</div>
</div>