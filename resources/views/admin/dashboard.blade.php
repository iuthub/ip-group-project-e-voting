@extends('admin.layout')

@section('content')
    <div class="container-fluid text-center">
        <h1 class="mt-5 text-dark">Statistics of <span class="text-info">Qaqnus.uz</span></h1>
       <div class="container row bg-light">
           <div class="col-lg-3 col-md-6 col-sm-6 pl-3 pr-1 pt-4">
               <div class="text-light shadow rounded bg-primary dashboard-card pt-2">
                <h2>Posts</h2>
                <h1><span class="badge badge-light text-primary">{{$data['posts']}}</span></h1>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 pl-2 pr-2 pt-4">
            <div class="text-light shadow rounded bg-success dashboard-card pt-2">
                <h2>Users</h2>
                <h1><span class="badge badge-light text-success">{{$data['users']}}</span></h1>
            </div>
            </div>
        <div class="col-lg-3 col-md-6 col-sm-6 pl-2 pr-2 pt-4">
            <div class="text-light shadow rounded bg-danger dashboard-card pt-2">
                <h2>Comments</h2>
                <h1><span class="badge badge-light text-danger">{{$data['comments']}}</span></h1>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6  pl-1 pr-3 pt-4">
            <div class="text-light shadow rounded bg-secondary dashboard-card pt-2">
                <h2>Admins</h2>
                <h1><span class="badge badge-light text-secondary">{{$data['admins']}}</span></h1>
            </div>
        </div>
       </div>
    </div>
@endsection