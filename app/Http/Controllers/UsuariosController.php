<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsuariosController extends Controller
{
    public function index($id){
      $perfil = User::find($id);
      return view('perfil', compact('perfil'));
    }
}
