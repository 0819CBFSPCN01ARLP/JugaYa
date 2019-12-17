@extends('layouts/master')
@section('section')
  <div class="container">
		<h2>Resultados:</h2>
		<h3>Usuarios</h3>
    <div class="row mb-5">
    @forelse ($user as $usuario)
			<div class="col-md-4">
				<div class="card">
					<img src="/storage/{{$usuario['profile_img']}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{$usuario["username"]}}</h5>
						<p class="card-text">{{$usuario["name"]}} {{$usuario["last_name"]}} </p>
						<a href="/profile/{{$usuario["id"]}}" class="btn btn-sm btn-primary">Ver Perfil</a>
					</div>
				</div>
			</div>
    @empty
      <p style="margin-left:15px">Wow... Such empty</p>
    @endforelse
  </div>
</div>

<div class="container">
  <h2>Resultados: </h2>
  <h3>Eventos</h3>
  <div class="row mb-5">
  @forelse ($evento as $eventos)
    <div class="col-md-4">
      <div class="card">
        <img src="http://lorempixel.com/1920/1080/sports/" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$eventos["name"]}}</h5>
          <p class="card-text">{{$eventos["deporte"]}} </p>
          <p class="card-text">{{$eventos["descripcion"]}} </p>
          <a href="#" class="btn btn-sm btn-primary">Ver Perfil</a>
        </div>
      </div>
    </div>
  @empty
    <p style="margin-left:15px">Wow... Such empty</p>
  @endforelse
  </div>
</div>
@endsection
