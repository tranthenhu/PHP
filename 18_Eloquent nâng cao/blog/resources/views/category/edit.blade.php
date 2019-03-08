<form method="post" action="{{route('category.update',$categorys->id)}}">
@csrf
  <input type="text" name="name" value="{{$categorys->name}}">
 
  <input type="submit" name="sua">
  <input type="button" value="quay lai" onclick="window.history.go(-1); return false;">
</form>