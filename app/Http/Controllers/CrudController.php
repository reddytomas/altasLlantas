<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\ProductosController;

class CrudController extends Controller
{
  // para mostrar todos
    public function admin(){
      $productos = Producto::paginate(50);
      return view('crud', compact('productos'));
    }

// para buscar
    public function search(Request $request) {
      if($request->has('buscar')){
      $productos = Producto::where('marca','LIKE','%' . $request->get('buscar') . '%')->orWhere('marca','LIKE','%'.$request->get('buscar'). '%')->orWhere('id','LIKE','%'.$request->get('buscar'). '%')->paginate(8);
      }else{
        $productos = Producto::paginate(8);
        }
        $productos->appends($request->only('buscar'));
          return view('crud')->with('productos',$productos);
      }

// para editar
      /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
         $producto = Producto::find($id);
         // dd($producto);
         return view('editarProducto', compact('producto'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'marca'=>'required', 'categoria'=>'required', 'talle'=>'required', 'precio'=>'required']);

        Producto::find($id)->update($request->all());
        $productos = Producto::all();
        return view('crud', compact ('productos', $productos));

    }


// para ver detalle
    public function detalle($id){
      $producto = Producto::find($id);
      return view('detalleProducto', compact('producto', $producto));
    }

// para crear producto

    public function agregar(){
      return view('agregarProducto');
    }

    public function store(Request $request){
      $this->validate($request,[ 'marca'=>'required', 'categoria'=>'required', 'talle'=>'required', 'precio'=>'required']);
        Producto::create($request->all());

        return redirect('/crud');
    }

// para borrar producto
    public function borrar($id){
      $producto = Producto::find($id)->delete();
      return redirect('/crud');
    }




}
