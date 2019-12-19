@extends('layouts.app')
@section('content')
<div><h1 class="_tituloPagina ml-1 mr-1  pt-3 bg-light text-dark pl-3 mb-3 mt-0 text-center" id="productos">Nuestras zapatillas</h1></div>
<form action="/buscarProducto" method="POST" class="col-12">
      @csrf
      <div class="page__demo">
        <label class="field a-field a-field_a1 page__field w-25">
          <input class="field__input a-field__input w-100" placeholder="Buscá tus llantas" id="inputB" name="buscar" required>
        </label>

      </div>
</form>
<section class="row m-5 h-100">
  @foreach ($productos as $producto)
    <article class="_producto col-sm-6 col-md-3 col-lg-2" id="_items">
    <a href="/detallado/{{$producto->id}}">
      <img class="d-block w-100"src="{{Storage::url($producto->featured_img)}}" alt="...">
      <h4><strong>{{$producto->marca}}</strong></h4>
      <p>{{$producto->categoria}}: ${{$producto->precio}}</p>
    </a>
    </article>
  @endforeach
  </section>

</section >
@endsection
