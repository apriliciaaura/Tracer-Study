@extends('layouts.adminmain')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan User</li>
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
                        <i class="nav-icon fas fa-user"></i>   
                        Daftar User
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <a href="{{ route('pengaturan.create') }}" class="btn btn-success float-right">
                                    <i class="fas fa-plus"></i>
                                        Tambah User
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
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                     @foreach($users->get() as $key => $u)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <td>{{$u->level}}</td>
                                        <td style="text-align: center;vertical-align: middle;">
                                                <a href="{{ route('pengaturan.edit', ['id_user' => $u->id_user]) }}" class="btn btn-warning">
                                                <i class="far fa-edit"></i>
                                                    Edit
                                                </a>
                                                <a href="{{ route('pengaturan.delete', ['id_user' => $u->id_user]) }}" class="btn btn-danger" onclick="return confirm('Delete data?');">
                                                <i class="far fa-trash-alt"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                         </thead>
                                        <tr>
                                    </tbody>
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
                              <li>Hanya bisa diakses oleh SuperAdmin</li>
                              <li>Untuk mengatur user baik admin maupun penguji</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>

@endsection()