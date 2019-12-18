<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Category;
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
      $categorias = Category::all();
      return view('agregarProducto')->with('categorias', $categorias);
    }

    // public function create(Request $request)
    // {
    //   $nombreArchivo = 'user_default.jpg';
    //   $imagen = $request->file('foto');
    //   $imagen->store("public/productos");
    //   Producto::create([
    //       'marca' => $data['marca'],
    //       'categoria' => $data['categoria'],
    //       'talle' => $data['talle'],
    //       'precio' => $data['precio'],
    //       'featured_img' => $data['foto']
    //     ]);
    //     return view('crud');



  public function store(Request $request){
      $this->validate($request,[ 'marca'=>'required', 'categoria'=>'required', 'talle'=>'required', 'precio'=>'required']);
      
      $imagen = $request->file('foto');
      $imagen->store("public/productos");

        Producto::create($request->all());

        return redirect('/crud');
    }
  // //   public function store(Request $request)
  //   {
  //
  //     Producto::create([
  //         'marca' => $request['marca'],
  //         'categoria' => $categoria['categoria'],
  //         'talle' => $request['talle'],
  //         'precio' => $request['precio'],
  //         'featured_img' => $request['foto']
  //       ]);
  //       return view('crud');
  // }

// para borrar producto
    public function borrar($id){
      $producto = Producto::find($id)->delete();
      return redirect('/crud');
    }




}
