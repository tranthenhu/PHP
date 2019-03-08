<form method="post" action="{{route('category.store')}}">
@csrf
  <input type="text" name="name">
  
  <input type="submit" name="them">
  <input type="button" value="quay lai" onclick="window.history.go(-1); return false;">
</form>