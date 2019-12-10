<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Producto;

class DetalleController extends Controller
{
    public function index(){
      return view('detalleProducto')->with('productos', Producto::paginate(1));
      //aca hay que poner algo diferente a paginate(4)$$$$$$$$$$$$$$$$$$$$$$$$$
    }
    //public function index($id){
      //$productos = Producto::find($id);
      //return view('detalleProducto', compact('producto'));
    //}
}
