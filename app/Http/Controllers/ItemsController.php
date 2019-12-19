<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;

class ItemsController extends Controller
{
    public function index(){
      return view('items')->with('productos',Producto::paginate(20));
    }
    public function search(Request $request) {
      if($request->has('buscar')){
      $productos = Producto::where('marca','LIKE','%' . $request->get('buscar') . '%')->orWhere('marca','LIKE','%'.$request->get('buscar'). '%')->paginate(8);
      }else{
        $productos = Producto::paginate(8);
        }
        $productos->appends($request->only('buscar'));
          return view('items')->with('productos',$productos);
      }
}
