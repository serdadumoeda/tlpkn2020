@extends('index')
@section('judul')
<title>Isi Temuan - BPK</title>
@endsection
@section('konten-header')
      <h1>
        BPK
        <small>Isi Temuan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> BPK</a></li>
        <li class="active">isi temuan</li>
      </ol>
@endsection
@section('konten')
<div class=" col-lg-9 box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('esii.store')}}" method="post">
              <div class="box-body">
                @csrf
                <div class="form-group">
                  <label>Satuan Kerja</label>
                  <select name="esi_id" class="form-control">
                    <option disabled selected="true">Pilih Satuan Kerja</option>
                    @foreach($esii as $sii)
                    <option value={{$sii->id}}>{{$sii->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <select class="form-control">

                        @for($x = $now; $x >= 2010; $x--)
                        <option>$x</option>
                        @endfor

                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor RHS</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor RHS">
                </div>
                <div class="form-group">
                  <label>Temuan</label>
                  <textarea class="form-control" rows="3" placeholder="Tuliskan Deskripsi Temuan"></textarea>
                </div>
                <div class="form-group">
                  <label>Kerugian negara</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kerugian Negara">
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tindak lanjut</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tindak Lanjut">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tanggal">
                </div>
                </div>
                </div>
                <div class="form-group">
                  <label>Temuan</label>
                  <textarea class="form-control" rows="3" placeholder="Tuliskan Deskripsi Temuan"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
      </div>
@endsection
