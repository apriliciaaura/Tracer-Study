@extends('layouts.adminmain')
@section('content')

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('soal.index') }}">Soal</a></li>
              <li class="breadcrumb-item active">Tambah Soal</li>
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
                <h3 class="card-title">
                    <i class="fas fa-plus"></i>
                    Form Tambah Soal
                </h3>
            </div>
          <div class="card-body">
            <form action="{{ route('soal.store') }}" method="POST" role="form" id="quickForm">
               @csrf
                <div class="card-body">
                  <div class="form-group">
                      <a class="btn bg-yellow" href="{{ route('soal.index') }}">
                      <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                        Back
                      </a>
                  </div>
                  <br>
                  <form action="{{ route('soal.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
              @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Soal</label>
                                <input type="text" name="kode_soal" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Soal</label>
                                <textarea id="ckeditor" class="form-control" name="soal" rows="10" cols="50"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Kategori Kelas</label>
                                <select class="form-control" id="kategori_id" name="kategori_id" class="form-control">
                                <option value="" hidden>Pilih Kategori</option>
                                @foreach($kategori_soal as $kategori)
                                <option value="{{ $kategori->id_kategori }}"> {{ $kategori->kategori }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Urut</label>
                                <input type="text" name="no_urut" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" name="status" id="exampleInputEmail1">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="form-group" style="margin-top:30px;">
                                <button type="submit" class="btn btn-md btn-success float-right">
                                    <i class="fas fa-plus"></i>
                                    Tambah
                                </button>
                            </div>
                       </form> 
                    </div>
                </div>
          </div>                 
        </div>
        <!-- /.card -->
      </div>
    </section>
  </div>

@section('ckeditor')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('ckeditor');
</script> 

@endsection()
@endsection()