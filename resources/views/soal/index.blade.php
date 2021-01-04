@extends('layouts.adminmain')

@section('datatablecss')
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Soal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-success">
              <div class="card-header">
                <h3 class="card-title">
                <i class="nav-icon fas fa-file-alt"></i>
                  Daftar Soal
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="margin-top:2px;">
                  <div class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                      <div class="col">
                            <a href="{{ route('soal.create') }}" class="btn btn-success float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Soal
                            </a>
                      </div>
                  </div>
                  <br>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                      </div>
                      <div class="col-sm-6 col-md-1">
                        <div class="dataTables_filter">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table style="text-align:center;" id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Kode</th>
                              <th>Soal</th>
                              <th>Kategori</th>
                              <th>No. Urut</th>
                              <th style="text-align: center;vertical-align: middle;">Aksi</th>
                            </tr>
                            @foreach($soal->get() as $key => $s)
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$s->kode_soal}}</td>
                              <td>{{$s->soal}}</td>
                              <td>{{$s->kategori}}</td>
                              <td>{{$s->no_urut}}</td>
                              <td style="text-align: center;vertical-align: middle;">
                                    <a href="{{ route('jawaban.index') }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-info-circle"></i>
                                        Detail
                                    </a>
                                    <a href="{{ route('soal.edit', ['id_soal' => $s->id_soal]) }}" class="btn btn-sm btn-warning">
                                    <i class="far fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="{{ route('soal.delete', ['id_soal' => $s->id_soal]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete data?');">
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

                    <div style="margin-top:30px; margin-right:2px;" class="row float-right">
                        <div class="dataTables_paginate paging_simple_numbers float-right" role="status" id="example1_paginate">
                          <ul class="pagination">

                          </ul>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('datatablejs')
    {{-- datatable --}}
<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection 