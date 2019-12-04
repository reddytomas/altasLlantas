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

<<<<<<< HEAD
Route::get('/producto', 'ProductosController@index');

Route::get('/perfil', 'UsuariosController@perfil' );

//Route::get('/preguntas'), ''
=======
Route::get('/crud', 'CrudController@index');
Route::get('/agregarProducto', 'AgregarProductoController@index');
Route::get('/borrarProducto', 'BorrarProductoController@index');
Route::get('/carritodecompras' 'CarritodecomprasController@index');
>>>>>>> e74d8b8396ae0c9bf5a0d833482cf78075d879f7
