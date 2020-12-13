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
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Radiobutton</td>
                                            <td>f21</td>
                                            <td>1</td>
                                            <td></td>
                                            <td>Sangat Besar</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-lg-edit">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="/hapus-jawaban" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Radiobutton</td>
                                            <td>f21</td>
                                            <td>2</td>
                                            <td></td>
                                            <td>Besar</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-lg-edit">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="/hapus-jawaban" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Radiobutton</td>
                                            <td>f21</td>
                                            <td>3</td>
                                            <td></td>
                                            <td>Cukup Besar</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-lg-edit">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="/hapus-jawaban" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Radiobutton</td>
                                            <td>f21</td>
                                            <td>4</td>
                                            <td></td>
                                            <td>Kurang</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-lg-edit">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="/hapus-jawaban" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Radiobutton</td>
                                            <td>f21</td>
                                            <td>5</td>
                                            <td></td>
                                            <td>Tidak Sama Sekali</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-lg-edit">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="/hapus-jawaban" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
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
              <form action="" role="form" id="quickForm">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Jawaban</label>
                      <Select name="jenis_jawaban" class="form-control">
                          <option value="">Text</option>
                          <option value="">Text Area</option>
                          <option value="">Combobox</option>
                      </Select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kode Jawaban</label>
                      <input type="text" name="kode_jawaban" class="form-control" id="exampleInputPassword1" placeholder="Contoh : f21">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nilai</label>
                      <input type="text" name="nilai_jawaban" class="form-control" id="exampleInputPassword1" placeholder="Contoh : 1">
                    </div>
                    <div class="form-group">
                      <label for="">Data Combobox</label>
                      <select name="data_combobx" class="form-control" id="">
                          <option value="">Tidak Ada</option>
                          <option value="">Program Studi</option>
                          <option value="">Perguruan Tinggi</option>
                          <option value="">Tahun Lulus</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Keterangan</label>
                      <textarea name="keterangan_jawaban" id="" cols="10" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">No. Urut</label>
                      <input class="form-control" type="text" name="no_urut" placeholder="Contoh : 1" id="">
                    </div>
                    <div class="form-group">
                      <label for="">Status</label>
                      <select class="form-control" name="stats" id="">
                          <option value="">Aktif</option>
                          <option value="">Tidak Aktif</option>
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

    {{-- Modal Edit Jawaban --}}
    <div class="modal fade" id="modal-lg-edit">
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
          <form action="" method="get">
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Jawaban</label>
              <Select name="jenis_jawaban" class="form-control">
                <option value="">Text</option>
                <option value="">Text Area</option>
                <option value="">Combobox</option>
              </Select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kode Jawaban</label>
              <input type="text" name="kode_jawaban" class="form-control" id="exampleInputPassword1" placeholder="Contoh : f21">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nilai</label>
              <input type="text" name="nilai_jawaban" class="form-control" id="exampleInputPassword1" placeholder="Contoh : 1">
            </div>
            <div class="form-group">
              <label for="">Data Combobox</label>
              <select name="data_combobx" class="form-control" id="">
                  <option value="">Tidak Ada</option>
                  <option value="">Program Studi</option>
                  <option value="">Perguruan Tinggi</option>
                  <option value="">Tahun Lulus</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Keterangan</label>
              <textarea name="edit_keterangan_jawaban" id="" cols="10" rows="5"></textarea>
            </div>
            <div class="form-group">
              <label for="">No. Urut</label>
              <input class="form-control" type="text" name="no_urut" placeholder="Contoh : 1" id="">
            </div>
            <div class="form-group">
              <label for="">Status</label>
              <select class="form-control" name="stats" id="">
                  <option value="">Aktif</option>
                  <option value="">Tidak Aktif</option>
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
@endsection

@section('ckeditor')
<script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('keterangan_jawaban');
    CKEDITOR.replace('edit_keterangan_jawaban');
</script>
@endsection 