@extends('layouts/master')
@php
  use App\User;
  use App\location;
@endphp
@section('section')

    <div class="card-body container">
      <form enctype="multipart/form-data" action="/editarEvento/{{$evento->id}}" method="post">
        {{csrf_field()}}
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Título</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre del Evento... " value="{{$evento["name"]}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="datetime-local" class="form-control" name="date" placeholder="fecha" value="{{$evento["date"]}}">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Tipo de Evento</label>
                <input type="text" class="form-control" name="deporte" aria-describedby="emailHelp" placeholder="Deporte" value="{{$evento["deporte"]}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ubicación</label>
                <select class="form-control" name="location_id" id="example-select" value="{{$evento["location"]}}">
                  <option value="" disabled selected>Seleccione Ubicación</option>
                  @foreach($locations as $location)
                    <option value= "{{$location->id}}">{{$location->name}}</option>
                  @endforeach
                </select>
            </div>
          </div>
        <div class="col-lg-12">
          <div class="form-group">
            <textarea name="descripcion" rows="5" cols="80" class="form-control" placeholder="Descripcion del evento" value="{{$evento["descripcion"]}}"></textarea>
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

@endsection
