<table>
<thead>
<tr>
 <th>ID</th>
 <th>title</th>
 <th>contain</th>
 <th>the loai</th>
 <th>sua/xoa</th>
 <th> <a href="{{route('create')}}">them</a> | </th>
</tr>
</thead>
<tbody>
@foreach ($blogs as $blog)
     <tr>
          <td>{{$blog->id}}</td>
          <td>{{$blog->title}}</td>
          <td>{{$blog->contain}}</td>
          <td>{{$blog->categorys->name}}</td> 
          <td>
               [ <a href="{{route('show',$blog->id)}}">xem</a> | 
               <a href="{{route('edit',$blog->id)}}">sua</a> |
               <a href="{{route('destroy',$blog->id)}}">xoa</a> ]
          </td>
     </tr>
@endforeach
<a href='{{route("category.index")}}' >quay ve category</a>
</tbody>
</table>