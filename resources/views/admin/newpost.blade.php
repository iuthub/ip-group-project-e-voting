@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <h2 class="mt-4 lead">Creating new post...</h2>
          <div class="new-post p-2 pr-3">
            <form action="/admin/posts/save" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="15" name="content" placeholder="Content"></textarea>
              </div>
              <div class="form-group">
                <label class="d-block">Category:</label>
                <label class="radio-inline">
                  <input type="radio" name="category" value="World"><kbd>World</kbd>
                </label>
                <label class="radio-inline">
                  <input type="radio" name="category" value="Local"><kbd>Local</kbd>
                </label>
              </div>
              <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" name="image" accept="image/*"  placeholder="Select image">
              </div>
              <button class="btn btn-success" type="submit">Create Post</button>
            </form>
          </div>
        </div>
    </div>
@endsection