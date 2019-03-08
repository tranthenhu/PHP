<table>
<thead>
<tr>
 <th>ID</th>
 <th>name</th>
 
 <th> <a href="{{route('category.create')}}">them</a> | </th>
</tr>
</thead>
<tbody>
@foreach ($categorys as $key => $category)
<tr>
<td>{{++$key}}</td>
<td>{{$category->name}}</td>

<td>
     [ <a href="{{route('category.show',$category->id)}}">xem</a> | 
     <a href="{{route('category.edit',$category->id)}}">sua</a> |
     <a href="{{route('category.destroy',$category->id)}}">xoa</a> ]
</td>
<td>
</td>
</tr>
@endforeach
<a href='{{route("index")}}' >quay ve blog</a>
</tbody>
</table>