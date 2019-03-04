<form method="post" action="{{route('store')}}">
@csrf
  <input type="text" name="title">
  <input type="text" name="contain">
  <input type="submit" name="them">
</form>