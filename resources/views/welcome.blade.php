@extends('layouts.app')

@section('title')
    Inicio
@endsection

@section('content')

<div class="card text-black text-body-emphasis">
    <img src="{{asset('img/bg_1.jpg')}}" class="card-img img-fluid" alt="fondo perritos">
    <div class="card-img-overlay">
      <h1 class="card-title text-lg-center text-md-center mt-5">PetFinder</h1>
    </div>
  </div>
  <div class="container text-center mt-5">
    <div class="row align-items-start">
      <div class="col">
        <p class="lead">
          Registrate.
        </p>
        <p class="lead">
          Llena el formulario correspondiente para asi estar registrado dentro de nuestra aplicacion y poder loguearte.
        </p>
      </div>
      <div class="col">
        <p class="lead">
          Inicia Sesion.
        </p>
        <p class="lead">
          Inicia sesion para poder navegar en nuestro sistema, visualizar todo lo que tenemos y encontrar a tu compañero ideal.
        </p>
      </div>
      <div class="col">
        <p class="lead">
          Adopta.
        </p>
        <p class="lead"> 
          Una vez dentro, busca a tu compañero, encuentralo y dale clic en adoptar, nosotros te contactaremos.
        </p>
      </div>
    </div>
  </div>
<div class="container text-center mt-5">
    <div class="row align-items-start">
      <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{asset('img/image_3.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Todos necesitamos un amigo en nuestras vidas, date la oportunidad de conocer a uno inseparable.</p>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{asset('img/gallery-1.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Ayudalos!, quizas no puedan hablar pero ellos tambien sienten, conviertete en su heroe.</p>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{asset('img/gallery-4.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Dales un hogar y cariño ellos al igual que todos lo necesitan, ayudemos a un mundo mejor.</p>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{asset('img/gallery-3.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Por un mundo mas unido entre razas, por una oportunidad para todos, por una vida 100% alegre.</p>
  </div>
</div>
      </div>
    </div>
  </div>

@endsection
    
    
