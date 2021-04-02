@extends('layouts.adminmain')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Petunjuk</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Petunjuk</li>
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
                        <i class="nav-icon fas fa-info-circle"></i>   
                        Daftar Petunjuk
                    </h1>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table style="text-align:center;" class="table my-table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Petunjuk</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                        @foreach($petunjuk as $key => $p)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{!!$p->isi!!}</td>
                                            <td width="20%" style="text-align: center;">
                                                <a href="{{ route('petunjuk.edit', ['id_petunjuk' => $p->id_petunjuk]) }}" class="btn btn-sm btn-warning">
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
                              <li>Petunjuk hanya bisa diedit dan tidak bisa ditambah dan dihapus</li>
                              <li>Petunjuk akan tampil di halaman user sebelum mengisi data tracer study</li>
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
@endsection
