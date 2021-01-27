@extends('layouts.adminmain')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pengumuman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
                        <li class="breadcrumb-item active">Edit Pengumuman</li>
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
                        Form Edit pengumuman
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengumuman.update', ['id_pengumuman' => $pengumuman->id_pengumuman]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                     @csrf
                    <div class="form-group">
                        <a class="btn med bg-yellow" href="{{ route('pengumuman.index') }}">
                            <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                            Back
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset class="fieldset-border">
                                <legend class="legend-border">Silahkan mengubah pengumuman pada form dibawah ini.
                                </legend>
                                <form action="" method="get">
                                    <div class="form-group">
                                        <label>Tanggal :</label>
                                        <div class="input-group date" id="datetimepicker">
                                            <input name="tanggal" type="date"
                                                class="form-control datetimepicker-input" value="{{ $pengumuman->tanggal}}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Judul :</label>
                                        <input class="form-control" type="text"
                                            placeholder="" name="judul" id="" value="{{ $pengumuman->judul}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Isi :</label>
                                        <textarea id="ckeditor" class="form-control" name="isi" rows="10" cols="50">{{$pengumuman->isi}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="mt-1 btn med btn-success float-right">
                                            <i class="fas fa-save"></i>
                                            Simpan Perubahan
                                        </button>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                    <hr>
                    <div class="card catatan bg-success">
                        <h3>
                            <i class="fas fa-info-circle"></i>
                            Catatan :
                        </h3>
                        <ul>
                            <li>Ubah data pengumuman pada form yang disediakan</li>
                            <li>Untuk menambahkan tanggal dapat meng-klik icon kalender di pojok kanan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>
@endsection

<script>
    jQuery(document).ready(function($) {
        $('.datepicker').datepicker({
            dateFormat: "dd-mm-yy"
        });
    });
</script>

@section('ckeditor')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('ckeditor');
</script>
@endsection