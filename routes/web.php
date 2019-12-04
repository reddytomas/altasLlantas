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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/producto', 'ProductosController@index');
Route::get('/perfil', 'UsuariosController@perfil' );
Route::get('/crud', 'CrudController@index');
<<<<<<< HEAD
Route::get('/agregarProducto', 'CrudController@agregar');
Route::get('/borrarProducto', 'CrudController@borrar');
Route::get('/carritodecompras' 'CarritodecomprasController@index');
=======
Route::get('/agregarProducto', 'AgregarProductoController@index');
Route::get('/borrarProducto', 'BorrarProductoController@index');
Route::get('/carritodecompras', 'CarritodecomprasController@index');
>>>>>>> 31e15982d0e4cec4e6e632ba5555020ad0d0cd61
