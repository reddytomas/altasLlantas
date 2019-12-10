<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function index(){
      return view('producto');
    }
    public function listarProductos(){
      $productos= Producto::all();
      return view('crud', compact('producto'));
    }
    public function guardarProductos(){
      //...
    }
    public function detalleProductos($id){
      $productos = Producto::find($id);
      return view('detalleProducto', compact('producto'));
    }
    public function buscarProductos(){
      $productos = Producto::where('marca', 'like', ':busqueda');
      return view('detalleProducto', compact('producto'));
    }
    public function borrarProductos($id){
      $productos = Producto::delete('id', 'like', $id);
      return view('crud', compact('producto'));
    }
    public function actualizarProductos(){
      $productos = Producto::update();
        return view('detalleProducto', compact('producto'));
    }
}
