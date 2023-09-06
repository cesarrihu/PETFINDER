@extends('layouts.app')

@section('title')
    Nosotros
@endsection

@section('content')
    <div class="card text-black text-body-emphasis">
        <img src="{{ asset('img/bg_2.jpg') }}" class="card-img img-fluid" style="width:1920px;height:600px;" alt="fondo perritos">
        <div class="card-img-overlay">
            <h1 class="card-title text-lg-center text-md-center mt-5">¿Quiénes Somos?</h1>
        </div>
    </div>
    <div class="container text-left mt-5">          
      <div class="row align-items-start">
        <div class="col-8">
          <p class="h2">Quienes somos?</p>
          <p class="mt-5">
            Somos PetFinder, una dedicada y apasionada organización sin fines de lucro que se dedica a la protección y bienestar de los animales. Fundada en 2023, nuestra misión es promover la adopción responsable de animales, prevenir el abandono y el maltrato, y trabajar incansablemente para construir un mundo en el que todos los animales sean tratados con amor y respeto.
          </p>
          <p class="h2">
            En el centro de nuestra identidad se encuentran nuestros valores:
          </p>
          <p>
            Compasión: Creemos en la compasión hacia todos los seres vivos y trabajamos para aliviar el sufrimiento de los animales en situaciones de abandono y maltrato.
          </p>
          <p>
            Adopción responsable: Nos esforzamos por encontrar hogares amorosos y responsables para los animales que rescatamos, asegurándonos de que tengan una segunda oportunidad en la vida.
          </p>
          <p>
            Educación: Creemos en la educación como una herramienta fundamental para crear una comunidad consciente y comprometida con el bienestar animal.
          </p>
          <p>
            Compromiso: Estamos comprometidos con la lucha contra el abandono y el maltrato animal a través de la esterilización y castración, la promoción de leyes de protección animal y la colaboración con otras organizaciones y autoridades.
          </p>
          <p>
            Respeto: Respetamos la diversidad de especies y promovemos la coexistencia pacífica entre humanos y animales.
          </p>
          <p>
            Transparencia: Somos una organización transparente y ética en todas nuestras operaciones, desde la recaudación de fondos hasta la gestión de recursos.
          </p>
          <p>
            En PetFinder, trabajamos día a día con el objetivo de marcar la diferencia en la vida de los animales necesitados y construir un mundo en el que todos los seres vivos gocen de un trato digno y compasivo. Nos enorgullece nuestra labor y estamos agradecidos por el apoyo de nuestros voluntarios, donantes y la comunidad en general que comparte nuestra visión. Juntos, estamos creando un futuro mejor para los animales.
          </p>
        </div>
        <div class="col-4 ms-auto">
          <p class="h2 text-right">Nuestro Fundador:</p>
          
          <div class="card mt-5" style="width: 18rem;">
            <img src="{{ asset('img/staff-1.jpg') }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bruce Wayne</h5>
              <p class="card-text">Amante de los animales e igual de comprometido que todo el equipo de trabajo.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">21 años de edad</li>
              <li class="list-group-item">Mexicano</li>
              <li class="list-group-item">"En busqueda de un mundo mejor"</li>
            </ul>
          </div>
        
        </div>
      </div>
    </div>
<div class="container mt-5">

  <p class="h2">Que hacemos?</p>

    <div class="clearfix mt-5">
        <img src="{{ asset('img\image_4.jpg') }}" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid" style="width:550px;height:350px;"
            alt="...">

        <p>
          En nuestra organización para la adopción de animales, nos dedicamos a una serie de importantes actividades con el objetivo de asegurar un futuro feliz y saludable para los animales que atendemos. Nuestro compromiso principal es promover la adopción responsable y el cuidado de los animales de compañía. Algunas de las coas que hacemos:
        </p>

        <p>
          Rescate y rehabilitación: Trabajamos incansablemente para rescatar animales en situación de abandono, maltrato o riesgo, brindándoles un refugio seguro y atención médica adecuada cuando sea necesario. Nuestra prioridad es su bienestar y salud.
        </p>

        <p>
          Adopciones responsables: Facilitamos la adopción de nuestros animales a hogares amorosos y responsables. Realizamos un proceso de selección de adoptantes para garantizar que los animales sean colocados en entornos adecuados y con personas comprometidas con su cuidado.
        </p>

        <p>
          Educación: Ofrecemos programas educativos a la comunidad sobre la tenencia responsable de mascotas, la esterilización y la importancia de tratar a los animales con compasión y respeto. Creemos que la educación es clave para prevenir el abandono y el maltrato animal.
        </p>

        <p>
          En resumen, lo que hacemos se centra en rescatar, cuidar, educar y promover la adopción responsable de animales, con el objetivo final de construir un mundo en el que todos los animales sean tratados con amor y respeto, y donde encuentren hogares donde sean apreciados como miembros de la familia.
        </p>

    </div>
    </div>

    <div class="container text-center mt-5">
    <div class="row align-items-start">
      <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{asset('img/gallery-5.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">PetFinder! la oportunidad que todos necesitamos.</p>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{asset('img/gallery-6.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Una organizacion libre de cualquier fin de lucro.</p>
  </div>
</div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
  <img src="{{asset('img/gallery-7.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Nosotros comprometidos con ustedes y ustedes comprometidos con nosotros.</p>
  </div>
</div>
      </div>
    </div>



  </div>
@endsection
