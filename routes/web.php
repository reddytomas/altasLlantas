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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/producto', 'ProductosController@index')->name('producto');
Route::get('/perfil/{id}', 'UsuariosController@index' );
//CRUD
Route::get('/crud', 'CrudController@admin')->middleware('auth')->middleware('rol');
Route::get('/detalleProducto/{id}', 'CrudController@detalle');
Route::post('/buscar','CrudController@search');
Route::get('/editarProducto/{id}', 'CrudController@edit');
Route::post('/updateProducto/{id}', 'CrudController@update');
Route::get('/borrarProducto/{id}', 'CrudController@borrar');

Route::get('/agregarProducto', 'CrudController@agregar');
Route::post('/guardarProducto', 'CrudController@store');






Route::get('/carritodecompras/{id}', 'CarritodecomprasController@index');
Route::get('/faq', 'FaqController@index');
Route::get('/detallado/{id}', 'DetalladoController@index')->middleware('auth');
Route::get('/buscarProducto', 'BuscarController@index');
Route::get('/items', 'ItemsController@index');
Route::get('/contacto', 'ContactoController@index');
