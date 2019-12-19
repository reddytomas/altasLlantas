@extends('layouts.app')
@section('content')
<div><h1 class="_tituloPagina ml-1 mr-1  pt-3 bg-light text-dark pl-3 mb-3 mt-0 text-center" id="productos">Nuestras zapatillas</h1></div>
<section class="row m-5 h-100">
  @foreach ($productos as $producto)

      <article class="col-sm-12 col-12-md col-lg-6">
        <img class="img-thumbnail img-fluid " src="{{Storage::url($producto->featured_img)}}" alt="...">
      </article>

      <article class="col-sm-12 col-12-md col-lg-6">
        <h3 class="d-inline-block">{{$producto->marca}} {{$producto->categoria}}</h3>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur temporibus nisi consequatur, consequuntur commodi. </p>
        <h5 class="">Precio: ${{$producto->precio}}</h5>
        <select class="custom-select ">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <select class="custom-select  ">
          <option value="1">43</option>
          <option value="2">44</option>
          <option value="3">45</option>
        </select>
          <form class="" action="/addtocart" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$producto->id}}">
            <button class="btn btn-dark">Agregar al carrito </button>
          </form>
      </article>

      </li>


  @endforeach
  </section>

</section >
@endsection
