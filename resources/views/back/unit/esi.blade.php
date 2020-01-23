@extends('index')
@section('judul')
<title>Masukkan Unit Eselon I</title>
@endsection
@section('konten-header')
      <h1>
        Unit Eselon I
        <small>Tambahkan unit Eselon I</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Eselon I</li>
      </ol>
@endsection
@section('konten')
<div class=" col-lg-9 box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Unit Eselon I</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tuliskan Nama Unit Eselon I">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
      </div>
@endsection
