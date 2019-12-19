<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
  public function contact(Request $request){
      $subject = "Consulta en Altas Llantas";
      $for = "nicolaasnunez@gmail.com";
      Mail::send('email',$request->all(), function($msj) use($subject,$for){
          $msj->from("$for","");
          $msj->subject($subject);
          $msj->to($for);
      });
      return redirect()->back();
  }
}
