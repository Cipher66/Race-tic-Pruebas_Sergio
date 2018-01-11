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

/*Route::group( ['middleware' => 'admin'],function (){

    Route::get('adminVerUsuarios','GestionarUsuariosController@ver');

});*/

Route::post('/adminActualizarUsuario/{id}','GestionarUsuariosController@modificar');

/*<-- Rutas mediante controlador -->*/
Route::get('/adminEliminarUsuarios', 'GestionarUsuariosController@eliminar');

Route::get('/adminEliminarUsuario/{id}', 'GestionarUsuariosController@eliminar');

Route::get('/adminEditarUsuario/{id}', function (){
    $usuarios = DB::table('users')->get();
    return view('editarUsuarios', ['usuarios' => $usuarios]);
});








/*Route::get('/adminActualizarUsuario', function (){
    return view('updateUser');
});*/

//Route::post('/adminActualizarUsuario','GestionarUsuariosController@actualizar');

/*Route::get('/adminVerUsuarios', ['middleware' => 'admin', function() {
    return view('admin');
}]);*/

/*Route::get('/adminEditarUsuario/{id}', function () {
    $usuarios = DB::table('users')->get();
    return view('editarUsuarios', ['usuarios' => $usuarios]);
});*/

//Route::post('/adminEditarUsuario', 'GestionarUsuariosController@modificar');

/*<-- Rutas para visualizar y eliminar usuarios en la vista de admin*/
/*Route::get('/adminVerUsuarios', function (){
    $usuarios = DB::table('users')->get();
    return view('admin', ['usuarios' => $usuarios]);

});

Route::get('/adminEliminarUsuarios/{id}', function ($id){
    $borrar = DB::table('users')->where('id', '=', $id)->delete();
    return redirect('/adminVerUsuarios');
});*/