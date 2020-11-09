@extends('layouts.adminmain')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if(Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  @if(Session::get('failed'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{Session::get('failed')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-edit"></i>
                    Change Password
                </h3>
            </div>
          <div class="card-body">
            <form role="form" id="quickForm" method="post" action="{{URL::to('update-password')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Password Lama</label>
                    <input type="password" name="old_password" class="form-control" placeholder="Password lama">
                  </div>
                  <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="password" placeholder="Password baru" class="form-control @error('password') is-invalid @enderror"> @error('password')<div class="invalid-feedback">{{$message}}</div>@enderror
                  </div>
                  <div class="form-group">
                    <label>Konfirmasi Password Baru</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi password baru">
                  </div>
                    <div style="margin-top: 40px;" class="form-group">
                      <button type="submit" class="btn btn-success">
                          <i style="margin-right:5px;" class="fas fa-save"></i>
                          Simpan
                      </button>
                    </div>
            </form>
        </div>  
                       
            </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection()
