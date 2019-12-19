<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Producto;
use App\Cart;

class CarritoController extends Controller
{
    public function index()
    {
      $cart = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
      return view('carritodecompras', compact('cart'));
    }
    //Este corresponde al que permite agregar al carrito
    public function store(Request $request)
    {
        $product = Producto::find($request->id);
        //Esto lo hago la lograr generar un numero de carrito de forma dinámica
        $item = new Cart;
        $item->marca = $product->marca;
        $item->categoria = $product->categoria;
        $item->talle = $product->talle;
        $item->precio = $product->precio;
        $item->featured_img = $product->featured_img;
        $item->cant = 1;
        $item->user_id = Auth::user()->id;
        //Este lo cree para controlar si el producto fue comprado (1) o aun no ha sido producto no comprado (0).
        $item->status = 0;
        //Aquí guardo en la tabla de cart (carrito)
        $item->save();
        return redirect('carritodecompras');
    }
    //Aquí traigo todos los productos del carrito del usuario logueado y que ha seleccionado una vez que decide cerrar la compra.
    public function cartclose(Request $request){
      $items = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
      //De esta forma genero el número del carrito para el usuario que está comprando
      $cart_number = Cart::max('cart_number') +1;
      foreach($items as $item){
        $item->status = 1;
        $item->cart_number = $cart_number;
        $item->save();
      }
      return redirect('home');
    }
    //Con este método controlo todo lo que el usuario historicamente ha comprado
    public function history(){
      $carts = Cart::where('user_id', Auth::user()->id)
                    ->where("status",1)->get()
                    ->groupBy('cart_number');
                    //De esta forma controlo todos los nros de carrito del usuario.
      return view('history', compact('carts'));
    }
}
