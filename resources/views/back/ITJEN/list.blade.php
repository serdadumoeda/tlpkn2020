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
                  <td>Rp&nbsp;{{number_format($lihat->kerugian_negara)}}</td>
                  <td><a data-toggle="modal" href="#{{$lihat->id}}-non" style="color: blue">Rp&nbsp;{{number_format($lihat->tindak_lanjut)}}&nbsp;<i class="fa fa-caret-right"></i></a></td>
                  <td>Rp&nbsp;{{number_format($lihat->sisa)}}</td>
                  @if($lihat->sisa==0)
                    <td><b>Non Piutang</b><br>{{$lihat->keterangan}}</td>
                  @else
                    <td><b>Piutang</b><br>{{$lihat->keterangan}}</td>
                  @endif
                  <td>
                    <a href="#{{$lihat->id}}" data-toggle="modal"><i class="fa fa-edit"></i>
                     <a href="#{{$lihat->id}}-delete" data-toggle="modal"><i class="fa fa-trash-o"></i>
                  </td>
                  @include('back.ITJEN.modal.deletelist')
                  @include('back.ITJEN.modal.editlist')
                 
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

              @foreach($show as $lihat)
                 @include('back.ITJEN.modal.ntpnlist')
              @endforeach
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
<script>
    $(function(){
        $('.add-data').click(function(){
            $('table.table').append('<tr><td><input type="hidden" value="{{$lihat->id}}" name="id"></td><td><input type="text" name="ntpn[]" placeholder="Masukkan Nomor NTPN" class="form-control name_list" required="" /></td><td><input type="text" name="setoran[]" placeholder="Masukkan Jumlah Setoran" class="form-control name_list" required="" /></td></tr>')
        })
    })
</script>
@endsection