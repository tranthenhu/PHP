@include('layout.head')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
  <div class="row">
  <h4>thêm loai san pham moi</h4>
  <div class="error-message">
    @if ($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{ $nameError }}</p>
        @endforeach
    @endif
</div>
 <div class="col col-md-2"></div>
    <div class="col col-md-8">
  <form method="post" action="{{route('phanloai.store')}}" enctype='multipart/form-data'>
  @csrf
  <div class="form-group required">
    <label for="exampleInputEmail1" class='control-label'>tên loai sản phẩm</label>
    <input type="text"  name='ten' class="form-control"  aria-describedby="emailHelp" >
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
 
  
    
    <li class="mm"><button type="submit" class="btn btn-primary">thêm</button></li>
    

</form>
</div>
  <div class="col col-md-2"></div>

</div>
</div>