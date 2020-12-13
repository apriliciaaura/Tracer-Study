@extends('layouts.adminmain')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Combobox</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Combobox</li>
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
                        <i class="nav-icon fas fa-list-alt"></i>   
                        List Daftar Combobox
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <a href="{{ route('combobox.create') }}" class="btn btn-success float-right">
                                    <i class="fas fa-plus"></i>
                                        Tambah Data Combobox
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                        @foreach($data_combobox->get() as $key => $combobox)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$combobox->nama}}</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <a href="{{ route('detail.index')}}" class="btn btn-sm btn-success">
                                                <i class="fas fa-info-circle"></i>
                                                    Detail
                                                </a>
                                                <a href="{{ route('combobox.edit', ['id_combobox' => $combobox->id_combobox]) }}" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                    Edit
                                                </a>
                                                <a href="{{ route('combobox.delete', ['id_combobox' => $combobox->id_combobox]) }}" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                         </thead>
                                        <tr>
                                    </tbody>
                                    <tfoot>
                                </table>
                            </div>
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