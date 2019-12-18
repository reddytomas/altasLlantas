@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Mi carrito</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
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
            <td>{{$item->precio}}</td>
            <td>{{$item->featured_img}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <form class="" action="/cartclose" method="post">
      @csrf
        <button type="submit" class="btn btn-success">Comprar</button>
    </form>
</div>
@endsection
