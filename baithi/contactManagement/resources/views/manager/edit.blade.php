
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('update',$managers->id)}}">
@csrf
<input type="text" name="ten" value="{{$managers->ten}}" > <br>
<input type="text" name="ho"value="{{$managers->ho}}"><br>
<input type="number" name="sodienthoai" value="{{$managers->sodienthoai}}"><br>
<input type="email" name="email" value="{{$managers->email}}"><br>
<input type="text" name="diachi" value="{{$managers->diachi}}"><br>
<input type="submit" >
</form>
