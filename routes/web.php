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


Route::get('/eventos','EventoController@directory')->middleware('auth');
Route::get('/misEventos','EventoController@mineDirectory')->middleware('auth');
Route::get('/editarEvento/{id}','EventoController@editar')->middleware('auth');

Route::get('/master',function(){
  return view('layouts/master');
});

Route::post('/eventos',"EventoController@create");
Route::post('/editarEvento/{id}','EventoController@sobrescribir');

Route::get('/miProfile', 'userController@miProfile');
Route::get('/profile/{id}', 'userController@profile');
