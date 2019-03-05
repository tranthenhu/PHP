
@extends('home')

@section('title', 'Cập nhật Blog')


@section('content')

  <div class="row">

      <div class="col-md-12">

          <h2>Cập nhật Blog</h2>

      </div>

      <div class="col-md-12">

          <form method="post" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">

              @csrf

              <div class="form-group">

                  <label>Title</label>

                  <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>

              </div>

              <div class="form-group">

                  <label>Content</label>

                  <textarea class="form-control" rows="3" name="content"  required>{{ $task->content }}</textarea>

              </div>

              <div class="form-group">

                  <label>Ảnh</label>

                  <input type="file" name="image" class="form-control-file" >

              </div>

              <button type="submit" class="btn btn-primary">Chỉnh sửa</button>

              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

          </form>

      </div>

  </div>


@endsection