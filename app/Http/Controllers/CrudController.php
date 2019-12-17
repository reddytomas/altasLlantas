<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\ProductosController;

class CrudController extends Controller
{
    public function admin(){
      $productos = Producto::paginate(8);
      return view('crud', compact('productos'));
    }

    public function search(Request $request) {
      if($request->has('buscar')){
      $productos = Producto::where('marca','LIKE','%' . $request->get('buscar') . '%')->orWhere('marca','LIKE','%'.$request->get('buscar'). '%')->paginate(8);
      }else{
        $productos = Producto::paginate(8);
        }
        $productos->appends($request->only('buscar'));
          return view('crud')->with('productos',$productos);
        }

    // public function agregar(){
    //   return view('agregarProducto');
    // }
    //
    // public function borrar(){
    //   return view('borrarProducto');
    // }
    //



}
