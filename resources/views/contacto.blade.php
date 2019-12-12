@extends('layouts.app')
@section('content')
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
@endsection
