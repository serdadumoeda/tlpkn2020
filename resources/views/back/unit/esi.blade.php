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
@include('info')
      <div class=" col-lg-9 box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('esi.store')}}" method="post">
              <div class="box-body">
                @csrf
                <div class="form-group">
                
                  <label for="exampleInputEmail1">Unit Eselon I</label>
                  <input type="text" name="name" class="form-control" placeholder="Tuliskan nama unit Eselon I">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
      </div>
    <div class=" col-lg-9 box box-primary">
      <div class="text-center"><h2>Daftar Unit Eselon I</h2></div>
						<table class="table table-striped table-hover">
							<thead>
								<tr class="info">
									<th>No</th>
									<th>Nama Unit Eselon I</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Tanggal Edit</th>
								</tr>
							</thead>
							<tbody>
								@foreach($show as $lihat)
									<tr>
										<td>{{$lihat->id}}</td>
										<td>{{$lihat->name}}</td>
										<td ><a href="#{{$lihat->id}}" data-toggle="modal"><i class="fa fa-edit"></i></a></td>
										<td><a href="#{{$lihat->id}}-delete" data-toggle="modal"><i class="fa fa-trash-o"></i></a></td>
										<td>{{date('j F Y',strtotime($lihat->updated_at))}}</td>
									</tr>

									<!--Delete-->

									<div class="modal fade" id="{{$lihat->id}}-delete">
											<div class="modal-dialog">
													<div class="modal-content">
															<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																	&times;
																	</button>
																	<h4 class="modal-title"> Apakah anda ingin menghapus unit Eselon I "<b>{{$lihat->name}}</b>"?</h4>
															</div>
															<div class="modal-body">
																	<form action="{{route('esi.destroy',$lihat->id)}}" method="post">
																	@csrf
																	{{method_field('DELETE')}}
																	<input type="submit" value="Hapus" class="btn btn-danger btn-block">
																	</form>
															</div>
													</div>
											</div>
									</div>		
											

									<!--EndDelete-->
									<div class="modal fade" id="{{$lihat->id}}">
											<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden='true'>
                                    &times;
                                </button>
															  <h4 class="modal-title">Edit Unit Eselon I</h4>
                              </div>
                                <div class="modal-body">
                                  <form action="{{route('esi.update',$lihat->id)}}" method="post" role="form">
                                      @csrf
                                      {{method_field('put')}}
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="name" value="{{$lihat->name}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                                </div>
															
													</div>
											</div>
									</div>
								@endforeach
							</tbody>
						</table>
					</div>
        </div>
@endsection