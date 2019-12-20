@php
  $total = 0;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Mi carrito</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Producto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Talle</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($cart as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->marca}}</td>
            <td>{{$item->categoria}}</td>
            <td>{{$item->talle}}</td>
            <td>${{$item->precio}}</td>
            <td><img class="w-25"src="{{Storage::url($item->featured_img)}}" alt="{{$item->featured_img}}"></td>
          </tr>
          @php
            $total = $total+ $item->precio;
          @endphp

        @endforeach
      </tbody>
    </table>
    <hr>
    <form class="" action="/cartclose" method="post">
      @csrf
        <p><strong>Total:</strong> ${{$total}}</p>
        <button type="submit" class="btn btn-success">Comprar</button>
    </form>
</div>
@endsection
