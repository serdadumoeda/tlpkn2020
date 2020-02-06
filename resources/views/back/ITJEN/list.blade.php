@extends('index')
@section('judul')
<title>Daftar Temuan - Inspektorat Jenderal</title>
@endsection
@section('konten-header')
      <h1>
        Inspektorat Jenderal
        <small>Daftar Temuan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inspektorat Jenderal</a></li>
        <li class="active">Daftar temuan</li>
      </ol>
@endsection
@section('konten')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Temuan Inspektorat Jenderal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Eselon I</th>
                  <th>Satuan Kerja</th>
                  <th>Tahun</th>
                  <th>No. RHS</th>
                  <th>Uraian</th>
                  <th>Kerugian Negara</th>
                  <th>Tindak Lanjut</th>
                  <th>Sisa</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                  
                </tr>
                </thead>
                <tbody>
                
                @foreach($show as $lihat)
                <tr>
                  <td></td>
                  <td>{{$lihat->esii->esi->name}}</td>
                  <td>{{$lihat->esii->name}}</td>
                  <td>{{$lihat->tahun_periksa}}</td>
                  <td>{{$lihat->no_rhs}}</td>
                  <td>{{$lihat->uraian}}</td>
                  <td>{{$lihat->kerugian_negara}}</td>
                  <td>{{$lihat->tindak_lanjut}}</td>
                  <td>{{$lihat->sisa}}</td>
                  <td>{{$lihat->keterangan}}</td>
                  <td>
                    <a href="#{{$lihat->id}}" data-toggle="modal"><i class="fa fa-edit"></i>
                     <a href="#{{$lihat->id}}-delete" data-toggle="modal"><i class="fa fa-trash-o"></i>
                  </td>

                  <div class="modal fade" id="{{$lihat->id}}-delete">
                          <div class="modal-dialog">
                                  <div class="modal-content">
                                          <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                  &times;
                                                  </button>
                                                  <h4 class="modal-title"> Apakah anda ingin menghapus "<b>{{$lihat->no_rhs}}</b>"?</h4>
                                          </div>
                                          <div class="modal-body">
                                                  <form action="{{route('itjen.destroy',$lihat->id)}}" method="post">
                                                  @csrf
                                                  {{method_field('DELETE')}}
                                                  <input type="submit" value="Hapus" class="btn btn-danger btn-block">
                                                  </form>
                                          </div>
                                  </div>
                          </div>
                  </div>

                  <div class="modal fade" id="{{$lihat->id}}">
                      <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden='true'>
                                              &times;
                                      </button>
                                      <h4 class="modal-title">Edit Temuan Inspektorat Jenderal</h4>
                                      </div>
                                        <div class="modal-body">
                                          <form role="form" action="{{route('itjen.update',$lihat->id)}}" method="post">
                                            <div class="box-body">
                                              @csrf
                                              {{method_field('put')}}
                                              <div class="form-group">
                                                <label>Eselon I</label>
                                                <select name="esi" id="esi" class="form-control">
                                                  <option disabled selected="true">Pilih Eselon I</option>
                                                  <option value={{$lihat->esii->esi->id}}>{{$lihat->esii->esi->name}}</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label>Satuan Kerja</label>
                                                <select name="satker" class="form-control">
                                                  <option disabled selected="true">Pilih Satuan Kerja</option>
                                                  <option value={{$lihat->esii->id}}>{{$lihat->esii->name}}</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="thn" class="form-control">
                                                <option disabled selected="true">Pilih Tahun</option>
                                                      @for($x = $now; $x >= 2010; $x--)
                                                      <option value={{$x}}>{{$x}}</option>
                                                      @endfor
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label>Nomor RHS</label>
                                                <input type="text" class="form-control" name="norhs" value="{{$lihat->no_rhs}}">
                                              </div>
                                              <div class="form-group">
                                                <label>Uraian</label>
                                                <textarea class="form-control" name="uraian" rows="3" >{{$lihat->uraian}}</textarea>
                                              </div>
                                              <div class="form-group">
                                                <label>Kerugian negara</label>
                                                <input type="text" class="form-control" name="rugi_negara" value="{{$lihat->kerugian_negara}}">
                                              </div>
                                              <div class="row">
                                              <div class="col-md-6">
                                              <div class="form-group">
                                                <label>Tindak lanjut</label>
                                                <input type="text" class="form-control" name="tl" value="{{$lihat->tindak_lanjut}}">
                                              </div>
                                              </div>
                                              <div class="col-md-6">
                                              <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="text" class="form-control" name="tgl" placeholder="Masukkan Tanggal">
                                              </div>
                                              </div>
                                              </div>
                                              <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea class="form-control" rows="3" name="ket" >{{$lihat->keterangan}}</textarea>
                                              </div>
                                              <div class="form-group">
                                                <label for="unggahBerkas">Unggah berkas</label>
                                                <input type="file" name="berkas">

                                                <p class="help-block">format file .pdf dengan ukuran maksimal 1 MB</p>
                                              </div>
                                            </div>
                                            <div class="box-footer">
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                      </div>
                  </div>

                 @endforeach
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Eselon I</th>
                  <th>Satuan Kerja</th>
                  <th>Tahun</th>
                  <th>No. RHS</th>
                  <th>Temuan</th>
                  <th>Kerugian Negara</th>
                  <th>Tindak Lanjut</th>
                  <th>Sisa</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap.min.css')}}">
@endsection
@section('script')
<script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection