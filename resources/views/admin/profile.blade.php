@extends('admin.layout')

@section('content')
    <div class="container-fluid text-center">
        <div class="container bg-light p-5">
            <div class="row shadow rounded profile pt-2 pb-2">
                <div class="col-lg-1 col-sm-1 col-md-1 text-center text-info">
                    <i class="fa fa-user-circle fa-4x"></i>
                </div>
                <div class="col-lg-5 col-sm-5 col-md-5 text-center">
                    <h3 class="font-weight-bold text-muted">{{$data['admin']->name}}</h3>
                    <h6>{{$data['admin']->email}}</h6>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 text-right pt-3">
                    <a href="/admin/profile/edit" class="btn btn-success">Update Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection