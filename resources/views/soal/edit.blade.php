@extends('layouts.adminmain')

@section('title')
    Edit Soal | Tracer Study
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Soal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('soal.index') }}">Soal</a></li>
            <li class="breadcrumb-item active">Edit Soal</li>
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
                    <i class="fas fa-edit"></i>
                    Form Edit Soal
                </h1>
            </div>
            <div class="card-body">
              <form action="{{ route('soal.update', ['id_soal' => $soal->id_soal]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              @csrf
              <div class="form-group">
                <a class="btn bg-yellow" href="{{ route('soal.index') }}">
                <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                  Back
                </a>
              </div>
              <br>
                 <div class="form-group">
                      <label>Kategori Kelas</label>
                        <select class="form-control" id="exampleInputEmail1" name="kategori_id">
                          @foreach($kategori_soal as $kategori)
                            <option value="{{ $kategori->id_kategori }}"> {{ $kategori->kategori }}</option>
                          @endforeach
                        </select>
                  </div>
                  <div class="form-group">
                      <label for="">Kode Soal</label>
                      <input type="text" name="kode_soal" class="form-control" id="exampleInputEmail1" value="{{ $soal->kode_soal}}" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="">Soal</label>
                      <textarea class="form-control" type="textarea" name="soal" id="exampleInputEmail1" cols="30" rows="10"> </textarea>
                  </div>
                  <div class="form-group">
                      <label for="">No. Urut</label>
                      <input type="text" name="no_urut" class="form-control" id="exampleInputEmail1" value="{{ $soal->no_urut}}" placeholder="">
                  </div>
                  <div class="form-group">
                      <label for="">Status</label>
                      <select class="form-control" name="status" id="exampleInputEmail1" value="{{ $soal->status}}">
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                      </select>
                  </div>
                  <div class="form-group" style="margin-top:30px;">
                      <button type="submit" class="btn btn-md btn-success float-right">
                          <i style="margin-right: 5px;" class="fas fa-save"></i>
                          Simpan Perubahan
                      </button>
                  </div>
              </form>
            </div>
        </div>
    </div>
  </section>
</div>
@endsection

@section('ckeditor')
<script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('soal');
</script>
@endsection 