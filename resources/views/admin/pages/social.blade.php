@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- eCommerce statistic -->



        <div class="row">
          <div class="col-12">
            <div class="card-deck-wrapper">
              <div class="card-deck">
                <div class="card">
                  <div class="card-content">
                    <i class="fab fa-whatsapp card-img-top img-fluid  fa-2xl" style="color:green; text-align: center; padding-top:40px;"></i>

                    <div class="card-body text-center">
                      <h4 class="card-title">Whatsapp</h4>
                      <p class="card-text">
                        {{ $social->whatsapp }}
                      </p>
                      <p class="card-text">
                        <small class="text-muted">

                            <button type="button" class="mr-1 mb-1 btn btn-outline-warning btn-min-width" data-toggle="modal"
                            data-target="#inlineForm">
                            <i class="fas fa-edit"></i> Edit
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                            aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <label class="modal-title text-text-bold-600" id="myModalLabel1">Whatsapp</label>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{ route('social.update') }}" method="POST" >
                                    @csrf

                                    <div class="modal-body">

                                      <label>Whatsapp: </label>
                                      <div class="form-group">
                                        <input type="text" placeholder="" name="whatsapp" class="form-control">
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                      value="close">
                                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Update">
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </small>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="card">
                    <div class="card-content">

                        <i class="fab fa-facebook card-img-top img-fluid  fa-2xl" style="color:#3b5998; text-align: center; padding-top:40px;"></i>
                      <div class="card-body text-center">
                        <h4 class="card-title">Facebook</h4>
                        <p class="card-text">
                          {{ $social->facebook }}
                        </p>
                        <p class="card-text">
                          <small class="text-muted">

                              <button type="button" class="mr-1 mb-1 btn btn-outline-warning btn-min-width" data-toggle="modal"
                              data-target="#inlineForm2">
                              <i class="fas fa-edit"></i> Edit
                              </button>
                              <!-- Modal -->
                              <div class="modal fade text-left" id="inlineForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                              aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <label class="modal-title text-text-bold-600" id="myModalLabel2">Facebook</label>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form action="{{ route('social.update') }}" method="POST" >
                                      @csrf

                                      <div class="modal-body">

                                        <label>Facebook: </label>
                                        <div class="form-group">
                                          <input type="text" placeholder="" name="facebook" class="form-control">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                        value="close">
                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Update">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          </small>
                        </p>
                      </div>
                    </div>
                  </div>




                  <div class="card">
                    <div class="card-content">

                        <i class="fab fa-instagram card-img-top img-fluid  fa-2xl" style="color:#cd486b ; text-align: center; padding-top:40px;"></i>
                      <div class="card-body text-center">
                        <h4 class="card-title">Insgaram</h4>
                        <p class="card-text">
                          {{ $social->instagram }}
                        </p>
                        <p class="card-text">
                          <small class="text-muted">

                              <button type="button" class="mr-1 mb-1 btn btn-outline-warning btn-min-width" data-toggle="modal"
                              data-target="#inlineForm3">
                              <i class="fas fa-edit"></i> Edit
                              </button>
                              <!-- Modal -->
                              <div class="modal fade text-left" id="inlineForm3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                              aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <label class="modal-title text-text-bold-600" id="myModalLabel3">instagram</label>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form action="{{ route('social.update') }}" method="POST" >
                                      @csrf

                                      <div class="modal-body">

                                        <label>Instagram: </label>
                                        <div class="form-group">
                                          <input type="text" placeholder="" name="instagram" class="form-control">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                        value="close">
                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Update">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          </small>
                        </p>
                      </div>
                    </div>
                  </div>





                  <div class="card">
                    <div class="card-content">

                        <i class="fab fa-tiktok card-img-top img-fluid  fa-2xl" style=" text-align: center; padding-top:40px;"></i>

                      <div class="card-body text-center">
                        <h4 class="card-title">Tiktok</h4>
                        <p class="card-text">
                          {{ $social->tiktok }}
                        </p>
                        <p class="card-text">
                          <small class="text-muted">

                              <button type="button" class="mr-1 mb-1 btn btn-outline-warning btn-min-width" data-toggle="modal"
                              data-target="#inlineForm4">
                              <i class="fas fa-edit"></i> Edit
                              </button>
                              <!-- Modal -->
                              <div class="modal fade text-left" id="inlineForm4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4"
                              aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <label class="modal-title text-text-bold-600" id="myModalLabel4">Tiktok</label>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form action="{{ route('social.update') }}" method="POST" >
                                      @csrf

                                      <div class="modal-body">

                                        <label>Tiktok: </label>
                                        <div class="form-group">
                                          <input type="text" placeholder="" name="tiktok" class="form-control">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                        value="close">
                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Update">
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                          </small>
                        </p>
                      </div>
                    </div>
                  </div>


              </div>
            </div>
          </div>
        </div>










      </div>
    </div>
  </div>@endsection
