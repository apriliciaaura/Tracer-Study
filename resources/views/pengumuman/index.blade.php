@extends('layouts.adminmain')
@section('content')

@section('datatablecss')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengumuman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pengumuman</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-success">
                <!-- Card Header -->
                <div class="card-header">
                    <div class="card-title">
                        <i class="fas fa-bullhorn"></i>
                        Data Pengumuman
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('pengumuman.create') }}" class="btn med btn-success float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Pengumuman
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <table style="text-align:center;" id="example" class="table table-hover datatable table-bordered table-striped dataTable dtr-inline"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th class="text-center" width="15%">Tanggal</th>
                                        <th width="20%">Judul</th>
                                        <th width="30%">Isi</th>
                                        <th class="text-center" width="20%">Aksi</th>
                                    </tr>
                                    @foreach($pengumuman as $key => $pe)
                                    <tr>
                                          <td>{{$key+1}}</td>
                                          <td><?=date('d F Y', strtotime($pe->tanggal));?></td>
                                          <td>{!!$pe->judul!!}</td>
                                          <td>{!!$pe->isi!!}</td>
                                        <td style="text-align:center;">
                                            <a href="{{ route('pengumuman.edit', ['id_pengumuman' => $pe->id_pengumuman]) }}" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                Edit
                                            </a>
                                            <a href="{{ route('pengumuman.delete', ['id_pengumuman' => $pe->id_pengumuman]) }}" class="btn btn-sm btn-danger">
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
                    <hr>
                    <!-- Card Catatan -->
                    <div class="card catatan bg-success">
                        <h3>
                            <i class="fas fa-info-circle"></i>
                                Catatan :
                        </h3>
                        <ul>
                            <li>Digunakan untuk membuat/menambahkan pengumuman pada halaman tracer study</li>
                            <li>Klik tombol "Tambah Pengumuman" untuk menambahkan pengumuman</li>
                            <li>Tombol "Edit" digunakan untuk mengedit salah satu pengumuman</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('datatablejs')
<!-- DataTables -->
<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
@endsection