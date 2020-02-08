<div class="modal fade" id="{{$lihat->id}}-non">
                          <div class="modal-dialog">
                                  <div class="modal-content">
                                          <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                  &times;
                                                  </button>
                                                  <h4 class="modal-title" id="exampleModalLabel">Rincian tindak lanjut</h4>
                                                  <h6 class="modal-title" id="exampleModalLabel">Nomor rhs : <em>{{$lihat->no_rhs}}<em></h6>
                                          </div>
                                          <div class="modal-body">
                                          <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <td>No. NTPN</td>
                                                    <td>Jumlah Setoran</td>
                                                </tr>
                                            </thead>

                                              <tbody>
                                                
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                
                                            </tbody>

                                          </table>
                                          </div>
                                          <div class="modal-footer">
                                               <a href="#{{$lihat->id}}-non2" data-toggle="modal"><i class="fa fa-plus-square"></i> Tambah</a>
                                          </div>
                                  </div>
                          </div>
                  </div>

                  <div id="{{$lihat->id}}-non2" class="modal fade" role="dialog" style="z-index: 1600;">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                          </button>
                          <h3>Silahkan tambahkan tindak lanjut</h3>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                          
                            {{ csrf_field() }}
                            {{ method_field('post') }}

                            <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">


                                  <table class="table">
                                      <tr>
                                          <td><input type="hidden" value="{{$lihat->id}}" name="id"></td>
                                          <td><input type="text" name="ntpn[]" placeholder="Masukkan Nomor NTPN" class="form-control name_list" required="" /></td>
                                          <td><input type="text" name="setoran[]" placeholder="Masukkan Jumlah Setoran" class="form-control name_list" required="" /></td>
                                      </tr>
                                  </table>

                            </div>

                            
                        
                          
                        </div>  
                        <div class="modal-footer">
                            <div class="form-actions">
                                <button type="button" class="add-data btn btn-default">Tambahkan baris</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        </form>  
                      </div>
                    </div>
                  </div>