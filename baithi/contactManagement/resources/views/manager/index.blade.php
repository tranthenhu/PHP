
<form method='post' action="{{route('findName')}}">
@csrf
<input type='text' name='find' placeholder="tim kiem theo ten">
<input type='submit' value="tim kiem">
</form>
<form method='post' action="{{route('findHo')}}">
@csrf
<input type='text' name='find' placeholder="tim kiem theo ho">
<input type='submit' value="tim kiem">
</form>
<table border='1px'>
<tr>
   <td>ten </td>
   <td>ho </td>
   <td>so dien thoai </td>
   <td>email </td>
   <td>dia chi </td>
   <td><a href="{{route('create')}}">them moi</a> </td>
</tr>
@foreach($managers as $manager)
<tr>
   <td>{{$manager->ten}} </td>
   <td>{{$manager->ho}} </td>
   <td>{{$manager->sodienthoai}}</td>
   <td>{{$manager->email}}</td>
   <td>{{$manager->diachi}}</td>
   <td> <a href="{{route('viewEdit',$manager->id)}}"> edit </a> | 
          <a href="{{route('delete',$manager->id)}}"> delete </a></td>
</tr>

@endforeach
</table>