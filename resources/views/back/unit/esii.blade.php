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
            <form role="form" action="{{route('esii.store')}}" method="post">
              <div class="box-body">
                @csrf
                <div class="form-group">
                    <label for='nama_id'>Nama Satuan Kerja</label>
                    <input type="text" name="name" class="form-control" placeholder="Tambahkan Satuan Kerja">
                </div>

                <div class="form-group">
                    <label for='kd_satker'>Kode Satuan Kerja</label>
                    <input type="text" name="kd_satker" class="form-control" placeholder="Tambahkan Kode Satuan Kerja">
                </div>
                <div class="form-group">
                            <label for='esi_id'>Unit Eselon I</label>
                            <select name="esi_id" class="form-control">
                                <option value="" class="disable selected">Pilih Unit Eselon I</option>
                                @foreach($esi as $si)
                                <option value="{{$si->id}}">{{$si->name}}</option>
                                @endforeach
                            </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <br>
              </div>
			    	</form>
      </div>

    <div class=" col-lg-9 box box-primary">
      <div class="text-center"><h2>Daftar Satuan Kerja</h2></div>
						<table class="table table-striped table-hover">
							<thead>
								<tr class="info">
									<th>Kode Satker</th>
									<th>Nama Satuan Kerja</th>
									<th>Unit Eselon I</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Tanggal Edit</th>
								</tr>
							</thead>
							<tbody>
								@foreach($show as $lihat)
									<tr>
										<td>{{$lihat->kd_satker}}</td>
										<td>{{$lihat->name}}</td>
										<td>{{$lihat->esi['name']}}</td>
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
																	<h4 class="modal-title"> Apakah anda ingin menghapus satuan kerja "<b>{{$lihat->name}}</b>"?</h4>
															</div>
															<div class="modal-body">
																	<form action="{{route('esii.destroy',$lihat->id)}}" method="post">
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
                                  <h4 class="modal-title">Edit satuan kerja</h4>
															</div>
															<div class="modal-body">
																<form action="{{route('esii.update',$lihat->id)}}" method="post" role="form">
																@csrf
																{{method_field('put')}}
															<div class="form-group">
																<input type="text" class="form-control" name="name" value="{{$lihat->name}}">
															</div>
															<div class="form-group">
									                        <label for='esi_id'>Edit Unit Eselon I</label>
									                        <select name="esi_id" class="form-control">
									                            <option value="" class="disable selected">Pilih Unit Eselon I</option>
									                            @foreach($esi as $es)
									                            <option value="{{$es->id}}" >{{$es->name}}</option>
									                            @endforeach
									                        </select>
									                   		</div>
									                   		<div class="form-group">
																	<label for='kd_satker'>Kode Satuan Kerja</label>
																	<input type="text" name="kd_satker" class="form-control" placeholder="Tambahkan Kode Satuan Kerja baru">
															</div>
																<button type="submit" class="btn btn-primary">Simpan</button>
																</form>
															</div>
															</div>
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
