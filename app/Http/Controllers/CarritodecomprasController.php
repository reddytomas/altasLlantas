<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritodecomprasController extends Controller
{
    public function index (){
      return view ('carritodecompras');
    }
}
