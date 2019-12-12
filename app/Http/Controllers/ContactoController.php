<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;

class ContactoController extends Controller
{
    public function index(){
      return view('contacto');
    }
}
