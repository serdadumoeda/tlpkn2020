@extends('index')
@section('judul')
<title>Daftar Temuan - Badan Pemeriksa Keuangan</title>
@endsection
@section('konten-header')
      <h1>
        Badan Pemeriksa Keuangan
        <small>Daftar Temuan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Badan Pemeriksa Keuangan</a></li>
        <li class="active">Daftar temuan</li>
      </ol>
@endsection
@section('konten')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Temuan Badan Pemeriksa Keuangan</h3>
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
                  <th>Temuan</th>
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
                  <td>{{$lihat->tahun}}</td>
                  <td>{{$lihat->no_rhs}}</td>
                  <td>{{$lihat->temuan}}</td>
                  <td>{{$lihat->kerugian_negara}}</td>
                  <td><a data-toggle="modal" href="#{{$lihat->id}}-non" style="color: blue">Rp&nbsp;{{number_format($lihat->tindak_lanjut)}}&nbsp;<i class="fa fa-caret-right"></i></a></td>
                  <td>{{$lihat->sisa}}</td>
                  @if($lihat->sisa==0)
                    <td><b>Non Piutang</b><br>{{$lihat->keterangan}}</td>
                  @else
                    <td><b>Piutang</b><br>{{$lihat->keterangan}}</td>
                  @endif
                  <td>
                     <a href="#{{$lihat->id}}" data-toggle="modal"><i class="fa fa-edit"></i>
                     <a href="#{{$lihat->id}}-delete" data-toggle="modal"><i class="fa fa-trash-o"></i>
                  </td>
                </tr>
                  @include('back.BPK.modal.deletelist')
                  @include('back.BPK.modal.editlist')
                @endforeach
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
               @include('back.BPK.modal.ntpnlist')
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
@endsection