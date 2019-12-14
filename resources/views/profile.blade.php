@extends('layouts/master')
@section('section')

<div class="container-fluid">
  <div class="row justify-content-center pt-3">
    <div class="col-xl-8 col-lg-8 ">
      <div class="card text-center">
        <div class="card-body">

        <img src="/storage/{{$user->profile_img}}" class="rounded-circle avatar-lg img-thumbnail"             alt="profile-image">

         <h4 class="mb-0 mt-2 mb-2">{{$user->username}}</h4>


         <button type="button" class="btn btn-success btn-sm mb-2">Follow</button>
         <button type="button" class="btn btn-danger btn-sm mb-2">Message</button>

         <div class="text-left mt-3">

          <p class="text-muted mb-2 font-13"><strong>Nombre completo :</strong> <span class="ml-2">{{$user->last_name}}  {{$user->name}} </span></p>
          <p class="text-muted mb-2 font-13"><strong>Intereses :</strong> <span class="ml-2">{{$user->intereses}}  </span></p>
          <p class="text-muted mb-2 font-13"><strong>Teléfono:</strong><span class="ml-2">{{$user->cellphone_number}}</span></p>
          <p class="text-muted mb-2 font-13"><strong>Email:</strong> <span class="ml-2 ">{{$user->email}}</span></p>

         </div>

          <ul class="social-list list-inline mt-3 mb-0">
            <li class="list-inline-item">
            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
            class="mdi mdi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
            class="mdi mdi-google"></i></a>
            </li>
            <li class="list-inline-item">
            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
            class="mdi mdi-twitter"></i></a>
            </li>
            <li class="list-inline-item">
            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
            class="mdi mdi-github-circle"></i></a>
            </li>
            </ul>
          </div> <!-- end card-body -->
          </div> <!-- end card -->



                              </div> <!-- end col-->


                          </div>
                          <!-- end row-->

                      </div>
                      <!-- container -->
@endsection
