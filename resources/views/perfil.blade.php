@extends('layouts.app')
@section('content')

  <div class="container-fluid m-0 p-0">

    <div class="jumbotron">
      <h1 class=" _tituloPagina ml-1 mr-1  bg-light text-dark pl-3 mb-3  text-center">Perfil</h1>
      <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
        <p><ion-icon name="person">  </ion-icon>{{$perfil->name}}</p>
        <p><ion-icon name="mail">  </ion-icon> {{$perfil->email}}</p>

        <hr class="my-4">
        <p>Compras</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Ver compras</a> <br>
        <p><br>Carrito </p>
        <a class="btn btn-primary btn-lg" href="/carritodecompras" role="button"><i class="fas fa-shopping-cart"></i></a>

    </div>
  </div>


@endsection
