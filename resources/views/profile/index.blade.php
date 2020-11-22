@extends('layouts.adminmain')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
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
                <i class="nav-icon fas fa-users"></i>
                  Daftar Tracer Study
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length">
                          <label for="">
                            Show &nbsp; 
                            <select name="example1_length" class="custom-select custom-select-sm form-control form-control-sm" id="">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select>
                             &nbsp; entries
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_filter">
                          <label for="">
                            <form action="/profile/cari" method="GET">
                            <input type="text" name="cari" placeholder="Nama/Tahun Lulus" class="form-control form-control-sm" id="cari">
                            <button style="margin-bottom:3px;" class="btn btn-sm btn-success form-contol" type="submit">
                              <i class="fas fa-search"></i>
                              Search
                            </button>
                          </form>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>NIM</th>
                              <th>Nama</th>
                              <th>Program Studi</th>
                              <th>Telp.</th>
                              <th>Email</th>
                              <th>Tahun Lulus</th>
                              <th style="text-align: center;vertical-align: middle;">Aksi</th>
                            </tr>
                            @foreach($data_alumni as $key => $alumni)
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$alumni->nim}}</td>
                              <td>{{$alumni->nama}}</td>
                              <td>{{$alumni->program_studi}}</td>
                              <td>{{$alumni->no_hp}}</td>
                              <td>{{$alumni->email}}</td>
                              <td>{{$alumni->tahun_lulus}}</td>
                              <td style="text-align: center;vertical-align: middle;">
                                <a href="{{ route('profile.detail') }}" class="btn btn-success">
                                  <i class="fas fa-info-circle"></i>
                                  Detail
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
                        <div class="dataTables_info" role="status" id="example1_info">Showing {{ $data_alumni->currentPage() }} to {{ $data_alumni->total() }} of {{ $data_alumni->perPage() }} entries</div>
                      </div>

                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" role="status" id="example1_paginate">
                            {{ $data_alumni->links() }}
                        </div>
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

@endsection()

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



