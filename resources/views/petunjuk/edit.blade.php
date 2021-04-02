@extends('layouts.adminmain')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Petunjuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('petunjuk.index') }}">Petunjuk</a></li>
              <li class="breadcrumb-item active">Edit Petunjuk</li>
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
                    <i class="fas fa-edit"></i>
                    Form Edit Petunjuk
                </h3>
            </div>
          <div class="card-body">
            <form action="{{ route('petunjuk.update', ['id_petunjuk' => $petunjuk->id_petunjuk]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                      <a class="btn bg-yellow" href="{{ route('petunjuk.index') }}">
                      <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                        Back
                      </a>
                  </div>
                  <br>
                <div class="row">
                    <div class="col-sm-12">
                       <form action="" method="get">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Petunjuk :</label>
                                <textarea id="ckeditor" class="form-control" name="isi" rows="10" cols="50"> {{$petunjuk->isi}}</textarea>
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
        </div>
        <!-- /.card -->
      </div>
    </section>
  </div>

@endsection

@section('ckeditor')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('ckeditor');
</script>

@endsection
