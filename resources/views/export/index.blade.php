@extends('layouts.adminmain')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Export Data Tracer Study</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Export Data</li>
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
                <i class="fas fa-download"></i>
                Form Export Data Tracer Study
                </div>
            </div>
          <!-- /.card-header -->

          <!-- Card Body -->
            <div class="card-body">
              <fieldset class="fieldset-border">
                <legend class="legend-border">Silahkan melakukan export data pada form di bawah ini !</legend>
                <form action="" >
                  <div class="form-group">
                    <label for="">Pilih Tahun Lulus :</label>
                    <select name="tahun_lulus" id="" class="form-control select select-success">
                        <option value="">2020</option>
                        <option value="">2019</option>
                        <option value="">2018</option>
                        <option value="">2017</option>
                        <option value="">2016</option>
                        <option value="">2015</option>
                        <option value="">2014</option>
                        <option value="">2013</option>
                        <option value="">2012</option>
                        <option value="">2011</option>
                        <option value="">2010</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <button class="btn med btn-success mt-2" type="submit">
                      <i class="fas fa-download"></i>
                      <a href="{{ route('profile.export') }}" ></a>
                        EXPORT
                    </button>
                  </div>
                </form>
              </fieldset>

              <hr>

                <!-- Card Catatan -->
                <div class="card catatan bg-success">
                  <h3>
                      <i class="fas fa-info-circle"></i>
                      Catatan :
                  </h3>
                  <ul>
                    <li>Digunakan untuk export data tracer study</li>
                    <li>Export data dilakukan berdasarkan tahun lulus</li>
                    <li>Export data untuk semua data dapat dilakukan dengan memilih semua tahun lulus</li>
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