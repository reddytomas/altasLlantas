@extends('layouts.app')
@section('content')
<body>
  <div class="container-fluid m-0 p-0">
    <header>
      <!-- navbar -------------------------------------->

        <!-- iniciar, registro o mi perfil ----------------------->
      </nav>
    </header>

<!-- PRODUCTO ---------------------------------------------->
      <section class="row m-5 h-100">
        <article class="col-sm-12 col-12-md col-lg-6">
          <img class=" img-thumbnail img-fluid " src="IMG/nike.jpg" alt="basquet">
        </article>

        <article class="col-sm-12 col-12-md col-lg-6">
          <h3 class="d-inline-block">Nike Basquet</h3>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tenetur temporibus nisi consequatur, consequuntur commodi. Expedita id nulla eius aperiam distinctio, molestiae velit sit ratione exercitationem officia, quaerat rerum mollitia?</p>
          <h5 class="">Precio: $3000</h5>
          <select class="custom-select ">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <select class="custom-select  ">
            <option value="1">US 9</option>
            <option value="2">US 10</option>
            <option value="3">US 11</option>
          </select>
          <button type="button" class="btn btn-dark">Agregar al carrito </button>
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
      <div class="text-center text-dark"><a href="#" class="">Volver arriba</a></div>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
  </body>
  @endsection
