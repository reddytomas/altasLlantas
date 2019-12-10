<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class EditarController extends Controller
{
    public function index(){
      return view('editarProducto')->with('productos', Producto::paginate(4));
      //aca hay que poner algo diferente a paginate(4)$$$$$$$$$$$$$$$$$$$$$$$$$
    }
}
