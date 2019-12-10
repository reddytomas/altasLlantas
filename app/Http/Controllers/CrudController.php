<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\ProductosController;
class CrudController extends Controller
{
    public function index(){
      return view('crud')->with('productos', Producto::paginate(4));
    }
    public function agregar(){
      return view('agregarProducto');
    }

    public function borrar(){
      return view('borrarProducto');
    }
}
