<form method="post" action="{{route('store')}}">
@csrf
  <input type="text" name="title">
  <input type="text" name="contain">
  <select name="category_id">
  @foreach ($categorys as $category)
  <option value="{{ $category->id }}" >{{ $category->name }}</option>
  @endforeach
  </select>
  <input type="submit" name="them">
</form>