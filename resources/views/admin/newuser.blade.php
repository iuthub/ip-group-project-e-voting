@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <h2 class="mt-4 lead">Creating new user...</h2>
          <div class="new-post p-2 pr-3">
            <form action="/admin/users/save" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label class="d-block">User role:</label>
                <label class="radio-inline">
                  <input type="radio" name="role" value="1"><kbd>Admin</kbd>
                </label>
                <label class="radio-inline">
                  <input type="radio" name="role" value="0"><kbd>User</kbd>
                </label>
              </div>
              <button class="btn btn-success" type="submit">Create User</button>
            </form>
          </div>
        </div>
    </div>
@endsection