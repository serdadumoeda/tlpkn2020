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
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">BPK</li>
      </ol>
@endsection
@section('konten')
      <div class=" col-lg-9 box box-primary">
            <form role="form" action="{{route('bpk.store')}}" method="post">
              <div class="box-body">
                @csrf
                <div class="form-group">
                  <label>Eselon I</label>
                  <select name="esi" id="esi" class="form-control">
                    <option disabled selected="true">Pilih Eselon I</option>
                    @foreach($esii as $sii)
                    <option value={{$sii->esi_id}}>{{$sii->esi->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Satuan Kerja</label>
                  <select name="satker" class="form-control">
                    <option disabled selected="true">Pilih Satuan Kerja</option>
                    @foreach($esii as $sii)
                    <option value={{$sii->id}}>{{$sii->name}}</option>
                    @endforeach
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
                  <input type="text" class="form-control" name="norhs" placeholder="Masukkan Nomor RHS">
                </div>
                <div class="form-group">
                  <label>Temuan</label>
                  <textarea class="form-control" name="temuan" rows="3" placeholder="Tuliskan Deskripsi Temuan"></textarea>
                </div>
                <div class="form-group">
                  <label>Kerugian negara</label>
                  <input type="text" class="form-control" name="rugi_negara" placeholder="Masukkan Kerugian Negara">
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Tindak lanjut</label>
                  <input type="text" class="form-control" name="tl" placeholder="Masukkan Tindak Lanjut">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>Date:</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                  </div>
                </div>
                </div>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" rows="3" name="ket" placeholder="Tuliskan Keterangan"></textarea>
                </div>
                <div class="form-group">
                  <label for="unggahBerkas">Unggah berkas</label>
                  <input type="file" name="berkas">

                  <p class="help-block">format file .pdf dengan ukuran maksimal 1 MB</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
      </div>
@endsection

<script type="text/javascript">
    $('#esi').on('change', function(e){
        console.log(e);
        var esi_id = e.target.value;
        $.get('/json-esii?esi_id=' + esi_id,function(data) {
          console.log(data);
          $('#esii').empty();
          $('#esii').append('<option value="0" disable="true" selected="true"> Pilih Satuan Kerja </option>');

          $.each(data, function(index, esiiObj){
            $('#esii').append('<option value="'+ esiiObj.id +'">'+ esiiObj.name +'</option>');
          })
        });
      });

</script>
<script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
$('#datepicker').datepicker({
      autoclose: true
    })
</script>
