
@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="es">
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fuentes y nuestro stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Ceviche+One|Sedgwick+Ave|Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display|Raleway|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

    <link rel="stylesheet" href="css/index.css">
    <title>Altas LLantas</title>
  </head>
    <body>


        <div class="spacer"></div>
        <h2 class="text-center">Editar Producto</h2>
       <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="marcaProducto">Marca</label>
                        @foreach ($productos as $producto)
                        <input type="text" class="form-control" name="marca" id="marcaProducto" value="{{$producto->marca}}">
                    </div>
                    <div class="form-group">
                        <label for="categoriaProducto">Categoria</label>
                        <input type="text" class="form-control" name="categoria" id="categoriaProducto" value="{{$producto->categoria}}">
                    </div>
                    <div class="form-group">
                        <label for="talle">Talle</label>
                        <input type="number" class="form-control" name="talle" id="talle" value="{{$producto->talle}}">
                    </div>
                    <div class="form-group">
                        <label for="precioProducto">Precio</label>
                        <input type="number" class="form-control" name="precio" id="precioProducto" value="{{$producto->precio}}">
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                </form>
                <a href="/crud" class="btn btn-danger" id="dangerman">Volver</a>
            </div>
        </div>
        <br>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7968cc1663.js" crossorigin="anonymous"></script>
    </body>
</html>
@endsection
