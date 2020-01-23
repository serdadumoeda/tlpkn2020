@extends('index')
@section('judul')
<title>Isi Temuan - Inspektorat Jenderal</title>
@endsection
@section('konten-header')
      <h1>
        Inspektorat Jenderal
        <small>Isi Temuan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inspektorat Jenderal</a></li>
        <li class="active">isi temuan</li>
      </ol>
@endsection
@section('konten')
<div class=" col-lg-9 box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Eselon I</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Eselon II</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor RHS</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor RHS">
                </div>
    
                <div class="form-group">
                  <label>Kerugian negara</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kerugian Negara">
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tindak lanjut</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nilai indak Lanjut">
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
                  <label>Keterangan</label>
                  <textarea class="form-control" rows="3" placeholder="Tuliskan Keterangan"></textarea>
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