@extends('admin.layout')

@section('content')
    <div class="container-fluid mt-3">
        <div class="container">
          <div class="mb-2">
            <a href="users/new/" class="btn btn-primary"><i class="fa fa-edit"></i>Create User</a>
          </div>
          <div class="posts-table">
            <table class="table table-hover table-responsive-lg" id="search_flag">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @if(count($data['users'])>0)
              @php $counter=1; @endphp
                @foreach ($data['users'] as $user)
                <tr class="table-secondary">
                  <td>{{$counter}}</td>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    <div class="row mr-2 mt-2" style="width:100px;">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="/admin/users/edit/{{$user->id}}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success"><i class="fa fa-refresh"></i></a>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <form action="/admin/users/delete/{{$user->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </form>
                      </div>
                    </div>
                  </td>
                </tr>
                @php $counter++; @endphp
                @endforeach
              @else
                <h2>No Users Yet</h2>
              @endif
              </tbody>
            </table>
          </div>
        </div>
        {{$data['users']->links()}}
    </div>
@endsection