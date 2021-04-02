@extends('layouts.adminmain')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Grafik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('grafik.index') }}">Grafik</a></li>
              <li class="breadcrumb-item active">Tambah Grafik</li>
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
                    Form Tambah Grafik
                </h3>
            </div>
          <div class="card-body">
            <form action="{{ route('grafik.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
          @csrf
            <div class="form-group">
                <a class="btn mt-1 med bg-yellow" href="{{ route('grafik.index') }}">
                <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                Back
                </a>
            </div>
            <fieldset class="fieldset-border">
              <legend class="legend-border">Silahkan menambah grafik pada form dibawah ini.</legend>
              <form role="form" id="quickForm">
                <div class="form-group">
                  <label for="judul">Judul : </label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="">
                </div>
                <div class="form-group">
                  <label for="soal">Soal : </label>
                  <input type="text" class="form-control" name="soal" id="soal" placeholder="">
                  <div class="form-group">
                    <label for="jenis-grafik">Jenis Grafik : </label>
                    <input type="text" class="form-control" name="jenis_grafik" id="jenis_grafik" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="jenis-label">Jenis Label : </label>
                    <input type="text" class="form-control" name="jenis_label" id="jenis_label" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="tahun-lulus">Tahun Lulus : </label>
                    <input type="text" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder="">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn med mt-1 btn-success">
                      <i style="margin-right:5px;" class="fas fa-save"></i>
                      Simpan
                    </button>
                  </div>
                </form>
              </fieldset>
              </div>
            </div>
        <!-- /.card -->
      </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection