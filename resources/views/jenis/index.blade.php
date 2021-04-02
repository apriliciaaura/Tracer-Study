@extends('layouts.adminmain')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jenis Jawaban</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Jenis Jawaban</li>
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
                    <h1 class="card-title">
                        <i class="nav-icon fas fa-check-square"></i>   
                        List Jenis Jawaban
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <a href="{{ route('jenis.create') }}" class="btn btn-success float-right">
                                    <i class="fas fa-plus"></i>
                                        Tambah Jenis Jawaban
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table style="text-align:center;" class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis Jawaban</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                        @foreach($jenis_jawaban->get() as $key => $jenis)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$jenis->jenis_jawaban}}</td>
                                                        <td style="text-align: center;vertical-align: middle;">
                                                <a href="{{ route('jenis.edit', ['id_jenis' => $jenis->id_jenis]) }}" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            </div>
                        </div>

                        <hr>
                        <div class="card catatan bg-success">
                            <h3>
                                <i class="fas fa-info-circle"></i>
                                Catatan :
                            </h3>
                            <ul>
                              <li>Jenis jawaban merupakan data jenis jawaban untuk masing-masing soal</li>
                              <li>Data jenis jawaban harus ditambahkan sebelum membuat soal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection()