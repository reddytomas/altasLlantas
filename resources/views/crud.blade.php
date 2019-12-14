@extends('layouts.app')
@section('content')
<!DOCTYPE html>

<body>
    <div class="spacer"></div>
    <h2 class="text-center">Listado de Productos!!!</h2>
    <div>
      <!--Este es formulario para que el usuario busque la película quje desee-->
        @foreach ($productos as $producto)
      <form action="" method="get">
        <a href="/buscarProducto?marca={{$producto->marca}}"><input type="submit" value="Buscar"><input type="text" name="buscarProducto"></a>
        @endforeach
      </form>
    </div>
    <div class="spacer">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productos as $producto)
            <tr>
              <td>{{$producto->id}}</td>
              {{$producto->id}}
              <td>{{$producto->marca}}</td>
              <td><a href="/detalleProducto?id={{$producto->id}}"><ion-icon name="eye"></ion-icon></a></td>
              <td><a href="/editarProducto?id={{$producto->id}}"><ion-icon name="create"></ion-icon></a></td>
              <td><a href="/borrarProducto?id={{$producto->id}}"><ion-icon name="close"></ion-icon></td></a>
            </tr>

          @endforeach
          <tr>

          </tr>
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
@endsection
