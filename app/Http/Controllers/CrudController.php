<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\ProductosController;
class CrudController extends Controller
{
    public function index(){
      return view('crud')->with('productos', Producto::paginate(10));
    }
    public function agregar(){
      return view('agregarProducto');
    }

    public function borrar(){
      return view('borrarProducto');
    }
    public function buscar(Request $request)
    {
        if($request->has('buscarProducto')){
            $products = Producto::where('marca','LIKE','%' . $request->get('buscarProducto') . '%')->paginate(8);
        }else{
            $producs = Producto::paginate(8);
        }
        $products->appends($request->only('buscarProducto'));
        return view('crud')->with('productos',$products);
    }

}
