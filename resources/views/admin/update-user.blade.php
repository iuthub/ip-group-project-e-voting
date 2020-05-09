@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <h2 class="mt-4 lead">Updating new user...</h2>
          <div class="new-post p-2 pr-3">
            <form action="/admin/users/update/{{$data['user']->id}}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$data['user']->name}}">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$data['user']->email}}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password" value="{{$data['user']->password}}">
              </div>
              <div class="form-group">
                <label class="d-block">User role:</label>
                @if ($data['user']->is_admin == 1)
                <label class="radio-inline">
                    <input type="radio" name="role" value="1" checked><kbd>Admin</kbd>
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="role" value="0"><kbd>User</kbd>
                  </label>
                @else
                <label class="radio-inline">
                    <input type="radio" name="role" value="1"><kbd>Admin</kbd>
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="role" value="0" checked><kbd>User</kbd>
                  </label>
                @endif
              </div>
              <button class="btn btn-success" type="submit">Update User</button>
            </form>
          </div>
        </div>
    </div>
@endsection