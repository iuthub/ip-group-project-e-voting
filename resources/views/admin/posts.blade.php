@extends('admin.layout')

@section('content')
    <div class="container-fluid mt-3">
        <div class="container">
          <div class="mb-2">
            <a href="posts/new/" class="btn btn-primary"><i class="fa fa-edit"></i>Create Post</a>
          </div>
          <div class="posts-table">
            <table class="table table-hover table-responsive-lg" id="search_flag">
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
                @php $counter=1; @endphp
                  @foreach ($data['posts'] as $post)
                  <tr class="table-secondary">
                    <td>{{$counter}}</td>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->category}}</td>
                    <td><img src="{{asset($post->img_path)}}" style="width:50px;height:40px;"></td>
                    <td>{{$post->created_at}}</td>
                    <td>
                      <div class="row mr-2 mt-2" style="width:155px;">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <a href="/article/{{$post->id}}" data-toggle="tooltip" data-placement="top" title="View" class="btn btn-primary" target="_blank"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <a href="/admin/posts/edit/{{$post->id}}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success"><i class="fa fa-refresh"></i></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <form action="/admin/posts/delete/{{$post->id}}" method="POST">
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
                  <h2>No Posts Yet</h2>
                @endif
              </tbody>
            </table>
          </div>
          {{$data['posts']->links()}}
      </div>
@endsection