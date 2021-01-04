@extends('layouts.adminmain')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('soal.index') }}">Soal</a></li>
              <li class="breadcrumb-item active">Detail Soal</li>
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
                        <i class="nav-icon fas fa-file-alt"></i>   
                        Daftar Jawaban Soal
                    </h1>
                </div>
                <div class="card-body">
                <div class="form-group">
                      <a class="btn bg-yellow" href="{{ route('soal.index') }}">
                      <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                        Back
                      </a>
                  </div>
                  <br>
                  <div class="table-responsive">
                    <table class="table no-border">
                        <tr>
                            <td width="14%">Kategori Soal</td>
                            <td width="1%">:</td>
                            <td width="85%">Metode Pembelajaran</td>
                        </tr>
                        <tr>
                            <td width="14%">Kode Soal</td>
                            <td width="1%">:</td>
                            <td width="85%">f2</td>
                        </tr>
                        <tr>
                            <td width="14%">Soal</td>
                            <td width="1%">:</td>
                            <td width="85%">Menurut Anda seberapa besar penekanan perkuliahan di laksanakan di program studi Anda?</td>
                        </tr>
                        <tr>
                            <td width="14%">No. Urut</td>
                            <td width="1%">:</td>
                            <td width="85%">1</td>
                        </tr>
                    </table>
                  </div>
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col float-left">
                                <span style="margin-left:8px; padding:2px; margin-bottom:-10px;">
                                    <strong style="font-size:16px;">Jawaban</strong>
                                </span>
                            </div>
                            <div class="col">
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-lg">
                                      <i class="fas fa-plus"></i>
                                      Tambah Jawaban
                                    </button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Jenis Jawaban</th>
                                            <th>Kode Jawaban</th>
                                            <th>Nilai</th>
                                            <th>Data Combobox</th>
                                            <th>Keterangan</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                     @foreach($jawaban->get() as $key => $j)
                                        <tr>
                                            <td>{{$j->jenis_jawaban}}</td>
                                            <td>{{$j->kode_jawaban}}</td>
                                            <td>{{$j->nilai}}</td>
                                            <td>{{$j->data_combobox}}</td>
                                            <td>{{$j->keterangan}}</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal-{{$j->id_jawaban}}">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="{{ route('jawaban.delete', ['id_jawaban' => $j->id_jawaban]) }}" class="btn btn-sm btn-danger">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    {{-- Modal Tambah Jawaban --}}
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">
                <i class="fas fa-plus"></i>
                  Form Tambah Jawaban
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style="background:#fff; color:#000;">
             <form action="{{ route('jawaban.store') }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Jawaban</label>
                      <select class="form-control" name="jenis_id">
                        @foreach($jawaban->get() as $key => $j)
                        <option value="{{ $j->id_jenis }}"> {{ $j->jenis_jawaban }}</option>
                        @endforeach
                      </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kode Jawaban</label>
                      <input type="text" name="kode_jawaban" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nilai</label>
                      <input type="text" name="nilai" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Data Combobox</label>
                      <select name="data_combobox" class="form-control" id="data_combobox">
                          <option value="Tidak Ada">Tidak Ada</option>
                          <option value="Program Studi">Program Studi</option>
                          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                          <option value="Tahun Lulus">Tahun Lulus</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Keterangan</label>
                      <input class="form-control" type="text" name="keterangan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">No. Urut</label>
                      <input class="form-control" type="text" name="no_urut" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Status</label>
                      <select class="form-control" name="status" id="status">
                          <option value="Aktif">Aktif</option>
                          <option value="Tidak Aktif">Tidak Aktif</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success float-right">Save Changes</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- /.modal tambah jawaban --}}

    @foreach($jawaban->get() as $key => $data)
    <div class="modal fade" id="exampleModal-{{ $data->id_jawaban}}">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h4 class="modal-title">
            <i class="fas fa-edit"></i>
              Form Edit Jawaban
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="{{ url('edit'. $data->id_jawaban) }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Jawaban</label>
              <select class="form-control" name="jenis_id">
              @foreach($jawaban->get() as $key => $j)
                <option value="{{ $j->id_jenis }}"> {{ $j->jenis_jawaban }}</option>
              @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kode Jawaban</label>
              <input type="text" name="kode_jawaban" class="form-control" value="{{$data->kode_jawaban}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nilai</label>
              <input type="text" name="nilai" class="form-control" value="{{$data->nilai}}">
            </div>
            <div class="form-group">
              <label for="">Data Combobox</label>
              <select name="data_combobox" class="form-control" name="data_combobox" value="{{$data->data_combobox}}">
                  <option value="Tidak Ada">Tidak Ada</option>
                  <option value="Program Studi">Program Studi</option>
                  <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                  <option value="Tahun Lulus">Tahun Lulus</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Keterangan</label>
              <input class="form-control" type="text" name="keterangan" value="{{$data->keterangan}}">
            </div>
            <div class="form-group">
              <label for="">No. Urut</label>
              <input class="form-control" type="text" name="no_urut" value="{{$data->no_urut}}">
            </div>
            <div class="form-group">
              <label for="">Status</label>
              <select class="form-control" name="status" value="{{$data->status}}">
                 <option value="Aktif">Aktif</option>
                 <option value="Tidak Aktif">Tidak Aktif</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-warning float-right">Save Changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    {{-- /.modal Edit Jawaban --}}
  </div>
  @endforeach

@section('ckeditor')
@endsection 

@endsection

