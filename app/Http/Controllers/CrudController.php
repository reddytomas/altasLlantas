<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
      return view('crud');
    }
    public function agregar(){
      return view('agregarProducto');
    }

    public function borrar(){
      return view('borrarProducto');
    }
}
