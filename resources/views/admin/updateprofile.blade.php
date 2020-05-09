@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
          <h2 class="mt-4 lead">Updating profile...</h2>
          <div class="new-post p-2 pr-3">
            <form action="/admin/profile" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$data['admin']->name}}">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$data['admin']->email}}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password" value="{{$data['admin']->password}}">
              </div>
              <button class="btn btn-success" type="submit">Update Profile</button>
            </form>
          </div>
        </div>
    </div>
@endsection