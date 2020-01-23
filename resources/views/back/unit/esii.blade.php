@extends('index')
@section('judul')
<title>Masukkan Unit Eselon II</title>
@endsection
@section('konten-header')
      <h1>
        Unit Eselon II
        <small>Tambahkan unit Eselon II</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Eselon II</li>
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
                  <label for="exampleInputEmail1">Unit Eselon II</label>
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
