<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class DetalladoController extends Controller
{
    public function index($id){
      $producto = Producto::find($id);
      return view('detallado', compact('producto'));
    }
}
