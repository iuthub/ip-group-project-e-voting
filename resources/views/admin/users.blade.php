@extends('admin.layout')

@section('content')
    <div class="container-fluid mt-3">
        <div class="container">
          <div class="mb-2">
            <button class="btn btn-success"><i class=""></i>Add user</button>
          </div>
          <div class="posts-table">
            <table class="table table-hover table-responsive-lg">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-secondary">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="mb-0">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="">1</a></li>
              <li class="page-item"><a class="page-link" href="">2</a></li>
              <li class="page-item"><a class="page-link" href="">3</a></li>
              <li class="page-item"><a class="page-link" href="">Next</a></li>
            </ul>
          </div>
        </div>
    </div>
@endsection