                  <div class="modal fade" id="{{$lihat->id}}">
                      <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden='true'>
                                              &times;
                                      </button>
                                      <h4 class="modal-title">Edit Temuan Badan Pemeriksa Keuangan</h4>
                                        <div class="modal-body">
                                          <form role="form" action="{{route('bpk.update',$lihat->id)}}" method="post">
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
                                                <label>Temuan</label>
                                                <textarea class="form-control" name="temuan" rows="3" >{{$lihat->temuan}}</textarea>
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