@extends('admin.layout')

@section('content')
    <div class="container-fluid mt-3">
        <div class="container">
          <div class="mb-2">
            <a href="posts/new/" class="btn btn-primary"><i class="fa fa-edit"></i>Create Post</a>
          </div>
          <div class="posts-table">
            <table class="table table-hover table-responsive-lg">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if(count($data['posts'])>0)
                @php $counter=1 @endphp
                  @foreach ($data['posts'] as $post)
                  <tr class="table-secondary">
                    <td>{{$counter}}</td>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->category}}</td>
                    <td><img src="{{asset($post->img_path)}}" style="width:30px;height:30px;"></td>
                    <td>{{$post->created_at}}</td>
                    <td style="width:155px;">
                      <a href="/article/{{$post->id}}" class="btn btn-primary d-inline" target="_blank"><i class="fa fa-eye"></i></a>
                      <a href="/admin/posts/edit/{{$post->id}}" class="btn btn-success d-inline"><i class="fa fa-refresh"></i></a>
                      <form action="/admin/posts/delete/{{$post->id}}" method="POST" class="m-0 p-0 d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                @else
                  <h2>No Posts Yet</h2>
                @endif
              </tbody>
            </table>
          </div>
          {{$data['posts']->links()}}
      </div>
@endsection