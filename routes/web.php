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
Route::get('/home',function(){
  return view('home');
});

Route::get('/inicio',function(){
  return view('inicio');
});

Route::get('/perfil',function(){
  return view('perfil');
});

Route::get('/listaAmigos',function(){
  return view('listaAmigos');
});

Route::get('/listaEventos',function(){
  return view('listaEventos');
});

Route::get('/crearEvento',function(){
  return view('crearEvento');
});
