@extends('layouts.adminmain')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Combobox</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('combobox.index') }}">Data Combobox</a></li>
              <li class="breadcrumb-item active">Tambah Data Combobox</li>
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
                        <i class="nav-icon fas fa-plus"></i>   
                        Form Tambah Data Combobox
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('combobox.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
                  @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <a class="btn bg-yellow" style="padding:5px 15px;" href="{{ route('combobox.index') }}">
                                    <i class="fas fa-arrow-left" style="margin-right:4px; margin-top:5px;"></i>
                                    Back
                                </a>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Combobox</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>
                            <div style="margin-top: 30px;" class="form-group float-right">
                                <button type="submit" class="btn btn-success">
                                    <i style="margin-right:5px;" class="fas fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection()