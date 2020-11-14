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

Route::get('/', function () {
    return view('principal');
});


//para poder cerrar sesion
Route::get('/logout','Auth\LoginController@logout');

Route::get('appFiltros','ServiciosController@filtros');
Route::get('obtenerPalabras','DiccionarioController@obtenerPalabras');
Route::get('detalleServicio/{id_anuncio}','ServiciosController@mostrar');
Route::get('gestion','UserController@gestion');
Route::get('adm_categorias','UserController@adm_categorias');
Route::get('obtenerSecretaria','UserController@obtenerSecretaria');
Route::post('actualiza_usuario','ServiciosController@Actualiza_usuario');
Route::post('condiciones','AnuncioController@updateCondicion');
Route::post('update_anunciospen','AnuncioPenController@update_anunciospen');

//Route::post('nuevoServicio','ServiciosController@store');

//Transferencia de datos
Route::resource('misAnuncios','MisAnunciosController');
Route::resource('appUltimosServicios','HomeController');
Route::resource('appServicios','ServiciosController');
Route::resource('appAnuncios','AnuncioController');
Route::resource('usuarios','UserController');

Route::resource('registro','User2Controller');
Route::resource('cupones','CuponController');
Route::resource('diccionario','DiccionarioController');
Route::resource('anunciospen','AnuncioPenController');


Route::get('/{vue?}', function () { return view('principal'); })->where('vue', '[\/\w\.-]*');

Auth::routes();




