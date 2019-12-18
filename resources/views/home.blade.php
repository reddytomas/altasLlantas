@extends('layouts.app')

@section('content')

  <div class="container-fluid m-0 p-0">

      <!-- carousel -------------------------------------->

      <section class="vh-80 _carousel">
        <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/productos/adidas.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/productos/reebok.jpg" class="d-block w-100 " alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/productos/nike.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
        </div>
    </section>
    <hr>
<!-- PRODUCTOS ---------------------------------------------->
    <div><h1 class="_tituloPagina ml-1 mr-1  pt-3 bg-light text-dark pl-3 mb-3 mt-0 text-center" id="productos">Nuestras zapatillas</h1></div>
    <section class="_articles row p-3 mt-10 mr-0 ml-0" id="productos">
      @foreach ($productos as $producto)
      <article class="_producto col-sm-6 col-md-3 col-lg-2" id="_items">
      <a href="/detallado/{{$producto->id}}">
<<<<<<< HEAD
        <img class="d-block w-100"src="{{ '/img/productos/'. $producto->featured_img }}" alt="...">
=======
        <img class="d-block w-100"src="{{ Storage::url('img/productos/'. $producto->featured_img) }}" alt="...">
>>>>>>> 91b1796c149b4a3fa965b13d416435c880f04ed4
        <h4><strong>{{$producto->marca}}</strong></h4>
        <p>{{$producto->categoria}}: ${{$producto->precio}}</p>
      </a>
      </article>
      @endforeach

    </section >

    <!-- CONTACTO  y maps----------------------------->
    <section class="_contacto row p-3 mr-0 ml-1" id="contacto">
      <article class="col-sm-12 col-md-6" id="_contactarprimera">
        <form>
          <h5 id="contactanos"class="_contactanosheader font-weight-bold">Contactanos</h5>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Comentario</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="acá podes dejar tu mensaje..."></textarea>
          </div>
          <button type="button" class="btn btn-primary">Enviar</button>
        </form>

      </article>
      <article class="col-sm-12 col-md-6 ">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.186626182054!2d-58.445864885054206!3d-34.54882986210239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1567563876614!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

      </article>

    </section>



  </div>



@endsection
