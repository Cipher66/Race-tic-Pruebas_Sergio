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


/* <-- Rutas de Sergio --> */
Route::get('/adminVerUsuarios', function (){
    $usuarios = DB::table('users')->get();
    return view('admin', ['usuarios' => $usuarios]);

});

Route::get('/adminEliminarUsuarios/{id}', function ($id){
    $borrar = DB::table('users')->where('id', '=', $id)->delete();
    return redirect('/adminVerUsuarios');
});