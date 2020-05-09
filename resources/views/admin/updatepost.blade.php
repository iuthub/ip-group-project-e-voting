@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <h2 class="mt-4 lead">Editing post...</h2>
          <div class="new-post p-2 pr-3">
            <form action="/admin/posts/update/{{$data['post']->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{$data['post']->title}}">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" name="description" placeholder="Description">{{$data['post']->description}}</textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="15" name="content" placeholder="Content">{{$data['post']->content}}</textarea>
              </div>
              <div class="form-group">
                <label class="d-block">Category:</label>
                @if ($data['post']->category == 'World')
                  <label class="radio-inline">
                    <input type="radio" name="category" value="World" checked><kbd>World</kbd>
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="category" value="Local"><kbd>Local</kbd>
                  </label>
                @else
                  <label class="radio-inline">
                    <input type="radio" name="category" value="World"><kbd>World</kbd>
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="category" value="Local" checked><kbd>Local</kbd>
                  </label>
                @endif
              </div>
              <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" name="image" accept="image/*"  placeholder="Select image" value="{{$data['post']->img_path}}">
              </div>
              <button class="btn btn-success" type="submit">Update Post</button>
            </form>
          </div>
        </div>
    </div>
@endsection