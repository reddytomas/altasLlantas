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


    public function agregar(){
      return view('agregarProducto');
    }

    public function borrar(){
      return view('borrarProducto');
    }

    // modificar este codigo de abajo
    public function buscar(Request $request)
    {
        if($request->has('buscarProducto')){
            $products = Producto::where('marca','LIKE','%' . $request->get('buscarProducto') . '%')->paginate(8);
        }else{
            $products = Producto::paginate(8);
        }
        $products->appends($request->only('buscarProducto'));
        return view('crud')->with('productos',$products);
    }

}
