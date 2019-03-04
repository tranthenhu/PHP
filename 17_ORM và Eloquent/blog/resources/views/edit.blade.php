<form method="post" action="{{route('update',$blogs->id)}}">
@csrf
  <input type="text" name="title" value="{{$blogs->title}}">
  <input type="text" name="contain"  value="{{$blogs->contain}}">
  <input type="submit" name="sua">
</form>