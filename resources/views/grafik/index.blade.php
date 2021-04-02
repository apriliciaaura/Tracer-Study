@extends('layouts.adminmain')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"> 
            <h1>Grafik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Grafik</li>
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
                        <i class="nav-icon fas fa-chart-pie"></i>   
                        Daftar Grafik
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                 <div class="dataTables_wrapper dt-bootstrap4">
                                    <a href="{{ route('grafik.create') }}" class="btn med btn-success float-right">
                                    <i class="fas fa-plus"></i>
                                        Tambah Grafik
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table style="text-align:center;" class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr style="text-align:center;">
                                            <th>No.</th>
                                            <td>Judul</td>
                                            <td>Soal</td>
                                            <td>Jenis Grafik</td>
                                            <td>Jenis Label</td>
                                            <td>Tahun Lulus</td>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                        @foreach($grafik as $key => $g)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$g->judul}}</td>
                                          <td>{{$g->soal}}</td>
                                          <td>{{$g->jenis_grafik}}</td>
                                          <td>{{$g->jenis_label}}</td>
                                          <td>{{$g->tahun_lulus}}</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <a href="" class="btn btn-sm btn-success">
                                                    <i class="fas fa-info-circle"></i>
                                                    Detail
                                                </a>
                                                <a href="{{ route('grafik.delete', ['id_grafik' => $g->id_grafik]) }}" class="btn btn-sm btn-danger">
                                                    <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                            </div>
                        </div>

                        <div style="margin-top:30px;" class="row">
                      <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" role="status" id="example1_info">Showing {{ $grafik->currentPage() }} to {{ $grafik->total() }} of {{ $grafik->perPage() }} entries</div>
                      </div>

                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" role="status" id="example1_paginate">
                            {{ $grafik->links() }}
                        </div>
                      </div>
                    </div>
                    
                        <hr>
                        <div class="card catatan bg-success">
                            <h3>
                                <i class="fas fa-info-circle"></i>
                                Catatan :
                            </h3>
                            <ul>
                              <li>Grafik berisi kumpulan grafik tracer study</li>
                              <li>Untuk melihat grafik klik icon detail</li>
                            </ul>
                        </div>
                        </div>
                </div>

            </div>
          <!-- /.Card Body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
@endsection 