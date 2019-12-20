@extends('layouts.app')
@section('content')

  <div class="container-fluid m-0 p-0">

    <div class="jumbotron">
      <h1 class=" _tituloPagina ml-1 mr-1  bg-light text-dark pl-3 mb-3  text-center">Perfil</h1>
      <div class="row">
        <div class="col-sm-12 col-lg-6 d-flex justify-content-center ">
          <img class="w-50"src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
        </div>

        <div class="col-sm-12 col-lg-6 ">

            <h4> <ion-icon name="person">  </ion-icon>{{$perfil->name}}<h4>
            <p> <ion-icon name="mail">  </ion-icon> {{$perfil->email}}</p>
            <hr>
            <p>Estas fueron tus ultimas compras.</p>
            <a class="btn btn-primary btn-lg w-50" href="#" role="button">Ver compras</a> <br>
            <hr>
            <p><br>Este es tu carrito de compras, donde podes seleccionar lo que quieras comprar. </p>
            <a class="btn btn-primary btn-lg w-50" href="/carritodecompras/{id}" role="button"><i class="fas fa-shopping-cart"></i></a>

        </div>
      </div>
        <hr class="my-4">

        {{-- <ul class="list-group-flush ">
          <li> <ion-icon name="person">  </ion-icon>{{$perfil->name}}</p></li><br>
          <p><ion-icon name="mail">  </ion-icon> {{$perfil->email}}</p>
          <li> <p>Compras</p></li><br>
          <a class="btn btn-primary btn-lg" href="#" role="button">Ver compras</a> <br>
          <li> <p><br>Carrito </p></li><br>
          <a class="btn btn-primary btn-lg" href="/carritodecompras" role="button"><i class="fas fa-shopping-cart"></i></a>
        </ul> --}}

      </div>
    </div>

  </div>


@endsection
