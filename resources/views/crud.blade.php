@extends('layouts.app')
@section('content')
    <div class="spacer"></div>
    <h2 class="text-center">Listado de Productos!!!</h2>
    <div>
      <!--Este es formulario para que el usuario busque la película quje desee-->


      <form action="/buscar" method="POST" class="col-12">
            @csrf
            <div class="page__demo">
              <label class="field a-field a-field_a1 page__field">
                <input class="field__input a-field__input w-100" placeholder="Ingresa id, marca o categoria" id="inputB" name="buscar" required>
              </label>
              <span>
                <a href="/agregarProducto" class="btn btn-secondary h-50" id="dangerman">+ Agregar Producto</a>
              </span>
            </div>
      </form>


    </div>
    <div class="spacer">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productos as $producto)
            <tr>
              <td>{{$producto->id}}</td>
              <td>{{$producto->marca}}</td>
              <td>{{$producto->categoria}}</td>
              <td><a href="/detalleProducto/{{$producto->id}}"><ion-icon name="eye"></ion-icon></a></td>
              <td><a href="/editarProducto/{{$producto->id}}"><ion-icon name="create"></ion-icon></a></td>
              <td><a class="btn btn-danger" onclick="return confirm('Estas seguro?')" href="/borrarProducto/{{$producto->id}}"><ion-icon name="close"></ion-icon></td></a>
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

@endsection
