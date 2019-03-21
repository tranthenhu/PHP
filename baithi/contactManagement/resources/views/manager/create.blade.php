@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action='{{route("add")}}'>
@csrf
<input type="text" name="ten" placeholder="ten"><br>
<input type="text" name="ho" placeholder="ho"><br>
<input type="number" name="sodienthoai" placeholder="so dien thoai"><br>
<input type="email" name="email" placeholder="email"><br>
<input type="text" name="diachi" placeholder="dia chi"><br>
<input type="submit" >
</form>