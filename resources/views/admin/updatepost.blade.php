@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <h2 class="mt-4 lead">Updating post...</h2>
          <div class="new-post p-2 pr-3">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="title" placeholder="Title">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" id="description" placeholder="Description"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="15" id="content" placeholder="Content"></textarea>
              </div>
              <div class="form-group">
                <label class="d-block">Category:</label>
                <label class="radio-inline">
                  <input type="radio" name="category" value="world"><kbd>World</kbd>
                </label>
                <label class="radio-inline">
                  <input type="radio" name="category" value="local"><kbd>Local</kbd>
                </label>
              </div>
              <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" accept="image/*"  placeholder="Select image">
              </div>
              <input type="text" id="sysdate" hidden>
              <button class="btn btn-success" type="submit">Update Post</button>
            </form>
          </div>
        </div>
    </div>
@endsection