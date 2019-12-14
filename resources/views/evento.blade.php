@extends('layouts/master')
@php
  use App\User;
  use App\location;
@endphp
@section('section')

  <div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-xl-8 col-lg-8">
           <!-- CHEQUEANDO QUE LLEGEN LOS EVENTOS-->
            <div class="tab-content mb-3">
                <div class="tab-pane show active" id="basic-form-preview">
                  <div class="accordion custom-accordion" id="custom-accordion-one">
                      <div class="card mb-0">
                          <div class="card-header" id="headingFour">
                              <h5 class="m-0">
                                  <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                      Crear Evento
                                  </a>
                              </h5>
                          </div>

                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#custom-accordion-one">
                              <div class="card-body">
                                <form enctype="multipart/form-data" action="/eventos" method="post">
                                  {{csrf_field()}}
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Título</label>
                                          <input type="text" class="form-control" name="name" placeholder="Nombre del Evento ...">
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Fecha</label>
                                          <input type="datetime-local" class="form-control" name="date" placeholder="fecha">
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Tipo de Evento</label>
                                          <input type="text" class="form-control" name="deporte" aria-describedby="emailHelp" placeholder="Deporte">
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Ubicación</label>
                                          <select class="form-control" name="location_id" id="example-select">
                                            <option value="" disabled selected>Seleccione Ubicación</option>
                                            @foreach($locations as $location)
                                              <option value= "{{$location->id}}">{{$location->name}}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                    </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <textarea name="descripcion" rows="5" cols="80" class="form-control" placeholder="Descripcion del evento"></textarea>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xl-12">
                                      <button type="submit" class="btn btn-primary">Enviar Información de Evento</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </div> <!-- end preview-->
            </div> <!-- end tab-content-->

            <!-- end new post -->
            @foreach ($eventos as $evento)
              @php
              $creator_id=$evento->user_id;
              $creator_user=User::find($creator_id);
              $location_id=$evento->location_id;
              $location_name=location::find($location_id)->name;
              @endphp
              <div class="card">
                  <div class="card-body pb-1">
                      <div class="media">
                          <img class="mr-2 rounded" src="storage/{{$creator_user["profile_img"]}}" alt="imagen de perfil " height="32">
                          <div class="media-body">
                              <div class="dropdown float-right text-muted">
                                  <a href="apps-social-feed.html#" class="dropdown-toggle arrow-none card-drop"
                                      data-toggle="dropdown" aria-expanded="false">
                                      ...
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    @if(Auth::id() == $creator_user["id"])
                                      <!-- item-->
                                      <a href="editarEvento/{{$evento->id}}" class="dropdown-item">Editar</a>
                                      <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item">Eliminar</a>
                                    @else
                                      <!-- item-->
                                      <a href="evento/{{$evento->id}}" class="dropdown-item">Ver Evento</a>
                                    @endif
                                  </div>
                              </div>
                              <h5 class="m-0"> <a href="/profile/{{$creator_id}}">{{$creator_user["username"]}}</a> </h5>
                              <p class="text-muted"><small>{{date('d/m/y', strtotime($evento->date))}} <span class="mx-1">⚬</span> <span>{{$evento->deporte}}</span><span class="mx-1">⚬</span><span>{{$location_name}}</span></small></p>
                          </div>
                      </div>

                      <hr class="m-0" />

                      <div class="font-16 text-center text-dark my-3">
                        {{$evento->descripcion}}
                      </div>

                      <hr class="m-0" />

                      <div class="my-1">
                          <a href="javascript: void(0);" class="btn btn-sm btn-success">Unirse</a>

                      </div>

            <!-- start news feeds -->
                              </div>
                </div> <!-- end card-body -->
               @endforeach
            </div> <!-- end card -->
            <!-- end news feeds -->
        </div>
    </div> <!--end row -->

@endsection
