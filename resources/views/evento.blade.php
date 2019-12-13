@extends('layouts/master')
@php
  use App\User;
@endphp
@section('section')

  <div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-xl-8 col-lg-8">
            <!-- new post -->
            <div class="card">
              <div class="card-body">
                  <ul class="nav nav-tabs nav-bordered mb-3">
                      <li class="nav-item">
                          <a href="form-elements.html#basic-form-preview" data-toggle="tab" aria-expanded="false" class="nav-link active">
                              Crear Evento
                          </a>
                      </li>
                  </ul> <!-- end nav-->
                 <!-- CHEQUEANDO QUE LLEGEN LOS EVENTOS-->

                  <div class="tab-content">
                      <div class="tab-pane show active" id="basic-form-preview">
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
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Deporte">
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
                                <textarea name="descripcion" rows="8" cols="80" class="form-control" placeholder="Descripcion del evento"></textarea>
                              </div>
                            </div>
                            </div>
                            <div class="row">
                              <div class="col-xl-12">
                                <button type="submit" class="btn btn-primary">Enviar Información de Evento</button>
                              </div>
                            </div>
                          </form>
                      </div> <!-- end preview-->

                      <div class="tab-pane" id="basic-form-code">
                          <pre class="mb-0">
                              <span class="html escape">
                                  &lt;form&gt;
                                      &lt;div class=&quot;form-group&quot;&gt;
                                          &lt;label for=&quot;exampleInputEmail1&quot;&gt;Email address&lt;/label&gt;
                                          &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
                                          &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else.&lt;/small&gt;
                                      &lt;/div&gt;
                                      &lt;div class=&quot;form-group&quot;&ggt;
                                          &lt;label for=&quot;exampleInputPassword1&quot;&gt;Password&lt;/label&gt;
                                          &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
                                      &lt;/div&gt;
                                      &lt;div class=&quot;form-group mb-3&quot;&gt;
                                          &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
                                              &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;checkmeout0&quot;&gt;
                                              &lt;label class=&quot;custom-control-label&quot; for=&quot;checkmeout0&quot;&gt;Check me out !&lt;/label&gt;
                                          &lt;/div&gt;
                                      &lt;/div&gt;
                                      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
                                  &lt;/form&gt;
                              </span>
                          </pre> <!-- end highlight-->
                      </div> <!-- end preview code-->
                  </div> <!-- end tab-content-->

              </div> <!-- end card-body-->
            </div>
            <!-- end new post -->
            @foreach ($eventos as $evento)
              @php
              $creator_id=$evento->user_id;
              $creator_user=User::find($creator_id);
              @endphp
              <div class="card">
                  <div class="card-body pb-1">
                      <div class="media">
                          <img class="mr-2 rounded" src="storage/{{$creator_user["profile_img"]}}" alt="imagen de perfil " height="32">
                          <div class="media-body">
                              <div class="dropdown float-right text-muted">
                                  <a href="apps-social-feed.html#" class="dropdown-toggle arrow-none card-drop"
                                      data-toggle="dropdown" aria-expanded="false">
                                      <i class="mdi mdi-dots-horizontal"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                      <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                      <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                  </div>
                              </div>
                              <h5 class="m-0">{{$creator_user["name"] ." ". $creator_user["last_name"]}}</h5>
                              <p class="text-muted"><small>{{date('d/m/y', strtotime($evento->date))}} <span class="mx-1">⚬</span> <span>Deporte</span></small></p>
                          </div>
                      </div>

                      <hr class="m-0" />

                      <div class="font-16 text-center text-dark my-3">
                          <i class="mdi mdi-format-quote-open font-20"></i>DESCRIPCION
                      </div>

                      <hr class="m-0" />

                      <div class="my-1">
                          <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted pl-0"><i class='mdi mdi-heart text-danger'></i> 2k Likes</a>
                          <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class='uil uil-comments-alt'></i> 200 Comments</a>
                          <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class='uil uil-share-alt'></i> Share</a>
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
