<table  border='1px'>
<tr>
   <td>ten </td>
   <td>ho </td>
   <td>so dien thoai </td>
   <td>email </td>
   <td>dia chi </td>
</tr>
@foreach($managers as $manager)
<tr>
   <td>{{$manager->ten}} </td>
   <td>{{$manager->ho}} </td>
   <td>{{$manager->sodienthoai}}</td>
   <td>{{$manager->email}}</td>
   <td>{{$manager->diachi}}</td>
  
</tr>

@endforeach
</table>