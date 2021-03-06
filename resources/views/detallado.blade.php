@extends('layouts.app')
@section('content')
<!doctype html>
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

    <link rel="stylesheet" href="../css/producto.css">
    <title>ProductoX</title>
  </head>

<body>
  <div class="container-fluid m-0 p-0">

<!-- PRODUCTO ---------------------------------------------->
      <section class="row m-5 h-100">
        <article class="col-sm-12 col-12-md col-lg-6">
          <img class="img-thumbnail img-fluid " src="{{Storage::url($producto->featured_img)}}" alt="...">
        </article>

        <article class="col-sm-12 col-12-md col-lg-6">
          <h3 class="d-inline-block">{{$producto->marca}} {{$producto->categoria}}</h3>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur temporibus nisi consequatur, consequuntur commodi. Expedita id nulla eius aperiam distinctio, molestiae velit sit ratione exercitationem officia, quaerat rerum mollitia?</p>
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

      </section>

    <!-- FOOTER con redes y nada mas -->
    <footer class="bg-light w-100">
      <p class="text-center" id="_altasllantasfooter">Altas Llantas</p>
      <ul class="list-unstyled list-group-horizontal d-flex justify-content-around ">
        <li><a href=""><i class="fab fa-instagram fa-2x "></i></a></li>
        <li><a href=""><i class="fab fa-facebook-square fa-2x"></i></a></li>
        <li><a href=""><i class="fab fa-twitter-square fa-2x"></i></a></li>
      </ul>
      <div id="volverArriba"class="text-center text-dark"><a href="#" class="">Volver arriba</a></div>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
  </body>
  @endsection
</html>
