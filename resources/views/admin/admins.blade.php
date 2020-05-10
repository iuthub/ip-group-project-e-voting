@extends('admin.layout')

@section('content')
    <div class="container-fluid mt-3">
        <div class="container">
          <div class="posts-table">
            <table class="table table-hover table-responsive-lg" id="search_flag">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
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