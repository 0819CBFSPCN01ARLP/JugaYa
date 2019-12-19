@extends('layouts/master')
@section('section')
@php
use App\User;
use Illuminate\Support\Facades\Auth;
@endphp
<div class="container-fluid">
  <div class="row justify-content-center pt-3">
    <div class="col-xl-8 col-lg-8 ">
      <div class="card text-center">
        <div class="card-body">

        <img src="/storage/{{$user->profile_img}}" class="rounded-circle avatar-lg img-thumbnail"             alt="profile-image">

         <h4  style="color:#0F2D67" class="mb-0 mt-2 mb-2">{{$user->username}}</h4>
       <!--CHEQUEO SI LO SIGUE O NO-->
         @php
                 $id=Auth::id();
                 $LoginUser=User::find($id);
                  $following=$LoginUser->following;
                 $loSigue=false;

                   foreach ($following as $follow){
                       if ($follow->id==$user->id){
                          $loSigue=true;
                       }
                    }

                   @endphp
                   @if(!$loSigue)
                  <a href="/followUser/{{$user->id}}" class="btn btn-sm btn-success unirse">Seguir</a>
                    @endif
                 @if($loSigue)
                <a href="#" class="btn btn-sm btn-succes unirse">Seguido</a>
                <a href="/unfollowUser/{{$user->id}}" class="btn btn-sm btn-danger unirse">Dejar de seguir</a>
                 @endif


         <div class="text-left mt-3">

          <p class="mb-2 font-13" style="color:#0F2D67"><strong>Nombre completo:</strong><span class="ml-1">{{$user->last_name}} {{$user->name}} </span></p>
          <p class="mb-2 font-13"style="color:#0F2D67 "><strong>Intereses:</strong> <span class="ml-1">{{$user->intereses}}  </span></p>
          <p class="mb-2 font-13"style="color:#0F2D67 "><strong>Teléfono:</strong><span class="ml-1">{{$user->cellphone_number}}</span></p>
          <p class="mb-2 font-13"style="color:#0F2D67 "><strong>Email:</strong> <span class="ml-1 ">{{$user->email}}</span></p>
          <div class="dropdown">
<button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Seguidos
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

@php
  $seguidos=$user->following
@endphp
@if (count($seguidos)==0)
<a class="dropdown-item" href="#">El usuario no sigue a nadie</a>
@endif
@foreach ($seguidos as $follow)
<a class="dropdown-item" href="profile/{{$follow->id}}">{{$follow->username}}</a>
@endforeach
</div>
</div>
         </div>


          </div> <!-- end card-body -->
          </div> <!-- end card -->



                              </div> <!-- end col-->


                          </div>
                          <!-- end row-->

                      </div>
                      <!-- container -->
@endsection
