@include('layout.head')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
  <div class="row">
  <h3>thêm sản phẩm</h3>
  <div class="error-message">
    @if ($errors->any())
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{ $nameError }}</p>
        @endforeach
    @endif
</div>
 <div class="col col-md-2"></div>

    <div class="col col-md-8">
  <form method="post" action="{{route('banner.store')}}" enctype='multipart/form-data'>
  @csrf
  
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