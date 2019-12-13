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
Route::get('/producto', 'ProductosController@index')->name('producto');
Route::get('/perfil/{id}', 'UsuariosController@index' );
//CRUD
Route::get('/crud', 'CrudController@admin')->middleware('auth')->middleware('rol');
Route::get('/agregarProducto', 'CrudController@agregar');
Route::get('/borrarProducto', 'CrudController@borrar');
Route::get('/detalleProducto', 'DetalleController@index');
Route::get('/editarProducto', 'EditarController@index');
Route::get('/buscarProducto', );


Route::get('/carritodecompras/{id}', 'CarritodecomprasController@index');
Route::get('/faq', 'FaqController@index');
Route::get('/detallado/{id}', 'DetalladoController@index')->middleware('auth');
Route::get('/buscarProducto', 'BuscarController@index');
Route::get('/items', 'ItemsController@index');
Route::get('/contacto', 'ContactoController@index');
