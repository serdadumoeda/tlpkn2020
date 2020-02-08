<div class="modal fade" id="{{$lihat->id}}-delete">
                          <div class="modal-dialog">
                                  <div class="modal-content">
                                          <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                  &times;
                                                  </button>
                                                  <h4 class="modal-title"> Apakah anda ingin menghapus "<b>{{$lihat->no_rhs}}</b>"?</h4>
                                          </div>
                                          <div class="modal-body">
                                                  <form action="{{route('itjen.destroy',$lihat->id)}}" method="post">
                                                  @csrf
                                                  {{method_field('DELETE')}}
                                                  <input type="submit" value="Hapus" class="btn btn-danger btn-block">
                                                  </form>
                                          </div>
                                  </div>
                          </div>
                  </div>