@extends('layouts.adminmain')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Konfigurasi Website</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Konfigurasi Website</li>
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
                    <i class="fas fa-cog"></i>
                    Form Konfigurasi Website
                </h3>
            </div>
          <div class="card-body">
            <form action="/konfigurasi/update">
              @csrf
              @foreach($konfigurasi_web as $key => $konfigurasi) 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Situs</label>
                    <form action="" method="post">
                      <input type="text" name="nama_website" class="form-control" id="exampleInputEmail1" value="{{ $konfigurasi->nama_website }}" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat/Situs Pengelola</label>
                    <input type="text" name="alamat_website" class="form-control" id="exampleInputEmail1" value="{{ $konfigurasi->alamat_website }}" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telp.</label>
                    <input type="text" name="telepon" class="form-control" id="exampleInputEmail1" value="{{ $konfigurasi->telepon }}" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{ $konfigurasi->email }}" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Situs</label>
                    <input type="text" name="alamat_halaman_website" class="form-control" id="exampleInputPassword1" value="{{ $konfigurasi->alamat_halaman_website }}"placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul Situs</label>
                    <input type="text" name="judul_website" class="form-control" id="exampleInputPassword1" value="{{ $konfigurasi->judul_website }}" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keyword</label>
                    <input type="keyword" name="keyword" id="exampleInputPassword1" value="{{ $konfigurasi->keyword }}" class="form-control" cols="30" rows="8"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Situs</label>
                    <input type="deskripsi_situs" id="exampleInputPassword1" class="form-control" value="{{ $konfigurasi->deskripsi_situs }}" cols="30" rows="8"></textarea>
                  </div>

              @endforeach()

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