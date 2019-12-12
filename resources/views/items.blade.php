@extends('layouts.app')
@section('content')
<div><h1 class="_tituloPagina ml-1 mr-1  pt-3 bg-light text-dark pl-3 mb-3 mt-0 text-center" id="productos">Nuestras zapatillas</h1></div>
<section class="_articles row p-3 mt-10 mr-0 ml-0" id="productos">
  @foreach ($productos as $producto)
  <article class="_producto col-sm-6 col-md-3 col-lg-2" id="_items">
  <a href="/detallado/{{$producto->id}}">
    <img class="d-block w-100"src="{{ asset('storage/img/productos/'. $producto->featured_img )}}" alt="...">
    <h4><strong>{{$producto->marca}}</strong></h4>
    <p>{{$producto->categoria}}: ${{$producto->precio}}</p>
  </a>
  </article>
  @endforeach

</section >
@endsection
