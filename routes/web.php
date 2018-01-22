<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
| Route::get('/verify/{token}','Auth\RegisterController@verify');
*/

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/coches', function () {
    return view('coches');
});
Route::get('/comofunciona', function () {
    return view('comofunciona');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('/adminVerUsuarios','GestionarUsuariosController@ver');

/*Route::group(['middleware' => 'admin'], function(){
    Route::get('/adminVerUsuarios','GestionarUsuariosController@ver');
});*/

//Route::get('/adminVerUsuarios', 'AdminController@index')->name('admin.home');

Route::get('/adminEliminarUsuario/{id}', 'GestionarUsuariosController@eliminar');

Route::get('/adminEditarUsuario/{id}', 'GestionarUsuariosController@editar');

Route::put ('/adminActualizarUsuario/{id}','GestionarUsuariosController@update');