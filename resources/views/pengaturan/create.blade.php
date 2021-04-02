@extends('layouts.adminmain')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('pengaturan.index') }}">User Setting</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-plus"></i>
                    Form Tambah User
                </h3>
            </div>
          <div class="card-body">
            <form action="{{ route('pengaturan.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                      <a class="btn btn-warning" href="{{ route('pengaturan.index') }}">
                      <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                        Back
                      </a>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="level">Level</label>
                      <select class="form-control" name="level" id="level">
                        <option value="Admin">Admin</option>
                        <option value="Superadmin">Superadmin</option>
                      </select>
                  </div>
                  <div style="margin-top: 30px;" class="form-group float-right">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </button>
                  </div>
            </form>
          </div>                 
        </div>
        <!-- /.card -->
      </div>
    </section>
  </div>

  @endsection()