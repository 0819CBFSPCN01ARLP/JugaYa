<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('app');
});*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/faq',function(){
  return view('faq');
});
Route::get('/master',function(){
  return view('layouts/master_template');
});

Route::get('/home',function(){
  return view('home');
});

Route::get('/inicio',function(){
  return view('inicio');
})->middleware('auth');


Route::get('/listaAmigos',function(){
  return view('listaAmigos');
})->middleware('auth');

Route::get('/listaEventos',function(){
  return view('listaEventos');
});

Route::get('/eventos',function(){
  $locations=\App\location::all();
  $eventos=\App\evento::orderBy('date','asc')->get();
  $vac=compact('locations','eventos');
  return  view('evento',$vac);
});

Route::get('/master',function(){
  return view('layouts/master');
});

Route::post('/eventos',"eventoController@create");

Route::get('/evento/{id}',function(){
  $locations=\App\location::all();
  $eventos=\App\evento::all();
  $vac=compact('locations','eventos');
  return view('evento',$vac);
});

Route::get('/profile/{id}', 'userController@profile');
/*Route::get('/perfil/{id}',function($id){
  $eventos=\App\Evento::all();
  $user=\App\User::find($id);
  $vac=compact('eventos','user');
  return view('perfil',$vac);
})->middleware('auth');
*/
Route::get('/perfil',function(){
  return view('perfil');
});
