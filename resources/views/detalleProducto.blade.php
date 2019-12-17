@extends('layouts.app')
@section('content')
<!DOCTYPE html>
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
    <h2 class="text-center">Detalle del Producto!!!</h2>
    <div class="row mt-5">
        <div class="col-lg-4 offset-lg-4">
            <div class="card w-100">
                <img class="card-img-top" src="IMG/logo.jpg" alt="Foto de la zapatill">
                <div class="card-body">
                    <h5 class="card-title text-center">{{$producto->marca}} {{$producto->categoria}} </h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nisi minima nemo expedita distinctio ipsa eum magnam fugiat! Aspernatur, illo.</p>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item ">Marca: {{$producto->marca}}</li>
                    <li class="list-group-item ">Categoria: {{$producto->categoria}}</li>
                    <li class="list-group-item">Talle: {{$producto->talle}}</li>
                    <li class="list-group-item">Precio: {{$producto->precio}}</li>
                </ul>

            </div>
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
