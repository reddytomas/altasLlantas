<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller
{
    public function index(){
      $producto = Producto::find($id);
      return view('carritodecompras', compact('producto'));
    }
}
