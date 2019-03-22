@include('layout.head')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
  <div class="row">
  <h4>chinh sua Role</h4>
  <div class="error-message">
</div>
 <div class="col col-md-2"></div>
    <div class="col col-md-8">
  <form method="post" action="{{route('role.update',$users->id)}}" enctype='multipart/form-data'>
  @csrf
  <div class="form-group required">
    <label for="exampleInputEmail1" class='control-label'>role</label>
    <input type="number"  name='role' min='0' max='1' class="form-control"  aria-describedby="emailHelp" value="{{$users->role}}">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
    <li class="mm"><button type="submit" class="btn btn-primary">sua</button></li>
</form>
</div>
  <div class="col col-md-2"></div>

</div>
</div>
