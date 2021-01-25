@extends('layouts.adminmain')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Import Data Tracer Study</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Import Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-outline card-success">
          <!-- Card-header  -->
            <div class="card-header">
                <div class="card-title">
                <i class="fas fa-upload"></i>
                Form Import Data Tracer Study
                </div>
            </div>
          <!-- /.card-header -->

          <!-- Card Body -->
            <div class="card-body">
              <fieldset class="fieldset-border">
                <legend class="legend-border">Silahkan melakukan import data pada form di bawah ini !</legend>
                <form action="" >
                  <div class="form-group">
                    <label for="">Cari Data Tracer Study  (.Excel) :</label>
                    <div class="custom-file">
                      <input accept=".xls,.xlsx" type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn med btn-success mt-2" type="submit">
                      <i class="fas fa-upload"></i>
                      Import
                    </button>
                  </div>
                </form>
              </fieldset>

              <hr>

                <!-- Card Catatan -->
                <div class="card catatan bg-success">
                  <h3>Catatan :</h3>
                  <ul>
                    <li>Digunakan untuk import data tracer study dalam format excell</li>
                  </ul>
                </div>

            </div>
          <!-- /.Card Body -->
        </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 