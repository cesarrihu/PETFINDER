@extends('layouts.app2')

@section('title')
    Ayudanos
@endsection

@section('content')
    <div class="card text-black text-body-emphasis">
        <img src="{{ asset('img/bg3.jpg') }}" class="card-img img-fluid" style="width:1920px;height:700px;"
            alt="fondo perritos">
        <div class="card-img-overlay">
            <h1 class="card-title text-lg-center text-md-center mt-5">Por que adoptar?</h1>
        </div>
        <div class="container w-75 mt-2 rounded shadow mb-5">
          <div class="row align-items-stretch">
              <div class="col text-center">
                <h1 class="h3">Adoptar es una oportunidad maravillosa</h1>
              </div>
          </div>
        </div>
        <div class="container w-75 mt-5 rounded shadow mb-5">
            <div class="row align-items-stretch">
                <div class="col">
                  <div class="card mb-3">
                    <img src="{{asset('img/carrusel1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Adoptar nos llena de amor.</h5>
                      <p class="card-text">Pasar tiempo con una mascota puede disminuir los niveles de estrés y ansiedad. La interacción con ellos libera endorfinas, lo que te hace sentir más relajado y feliz.
                      </p>
                      <p class="card-text"><small class="text-body-secondary">No lo dudes mas, te esperamos.</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Mejora tu salud mental.</h5>
                      <p class="card-text">Está demostrado que tener una mascota puede reducir la depresión, la ansiedad y el sentimiento de soledad. Pueden ser una fuente de apoyo emocional y proporcionar consuelo en momentos difíciles.</p>
                      <p class="card-text"><small class="text-body-secondary">No lo dudes mas, te esperamos.</small></p>
                    </div>
                    <img src="{{asset('img/carrusel2.jpg')}}" class="card-img-bottom" alt="...">
                  </div>
                </div>
            </div>
        </div>
        <div class="container w-75 mt-5 rounded shadow mb-5">
          <div class="row align-items-stretch">
              <div class="col">
                <h1 class="lead">Conoce algunos otros beneficios.</h1>
              </div>
          </div>
        </div>
        <div class="container w-75 mt-5 rounded shadow mb-5">
          <div class="row align-items-stretch">
              <div class="col">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Beneficio 1
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class=" accordion-body">
                        <strong>Compañía y afecto:</strong> Las mascotas, como los perros y gatos, a menudo están dispuestas a pasar tiempo contigo y proporcionar afecto incondicional. Esta compañía puede ser especialmente valiosa para personas que viven solas o que experimentan sentimientos de soledad.
                        El contacto físico con las mascotas, como acariciar a un gato o abrazar a un perro, libera hormonas como la oxitocina y la dopamina, que promueven sentimientos de felicidad y reducen el estrés y la ansiedad.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Beneficio 2
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>Ejercicio y actividad física:</strong> Los perros, en particular, requieren ejercicio diario, lo que te motiva a mantenerte activo. Pasear a tu perro es una excelente forma de hacer ejercicio cardiovascular y mantener un estilo de vida activo.
                        La actividad física regular asociada con el cuidado de las mascotas también puede ayudarte a mantener un peso saludable y mejorar la salud cardiovascular.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Beneficio 3
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>Rutina y responsabilidad:</strong> Cuidar de una mascota implica establecer una rutina diaria para alimentarlos, proporcionar agua, sacarlos a pasear y atender sus necesidades médicas. Esto puede ayudarte a desarrollar una estructura y organización en tu vida diaria.
                        La responsabilidad de cuidar a una mascota puede enseñarte a ser más puntual y comprometido, lo que puede tener un impacto positivo en tu vida laboral y personal.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item-success">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecuatro" aria-expanded="false" aria-controls="collapsecuatro">
                        Beneficio 4
                      </button>
                    </h2>
                    <div id="collapsecuatro" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>Aumento de la sociabilidad:</strong> Las mascotas, especialmente los perros, pueden ser un excelente punto de conversación y una forma de romper el hielo con otras personas. Cuando sacas a pasear a tu perro o participas en actividades relacionadas con mascotas, como parques para perros o eventos de adopción, tienes la oportunidad de conocer a nuevos amigos.
                        El compartir la responsabilidad de cuidar una mascota con otros miembros de la familia o amigos también puede fortalecer los lazos sociales.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecinco" aria-expanded="false" aria-controls="collapsecinco">
                        Beneficio 5
                      </button>
                    </h2>
                    <div id="collapsecinco" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>Desarrollo de empatía y amor incondicional:</strong> Cuidar de una mascota te enseña a poner las necesidades de otro ser vivo antes que las tuyas. Esto puede desarrollar tu empatía y comprensión hacia las necesidades y sentimientos de otros.
                        Experimentar el amor incondicional que una mascota te brinda puede tener un efecto profundamente positivo en tu bienestar emocional. Saber que tu mascota siempre te recibirá con alegría y afecto puede ser reconfortante en momentos difíciles.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container w-100 mt-5 rounded shadow mb-5">
                  <div class="row align-items-stretch">
                      <div class="col">
                        <h1 class="h2">En resumen</h1>

                        <p class="h5">Adoptar una mascota puede enriquecer tu vida de diversas maneras, desde proporcionar compañía y afecto hasta fomentar un estilo de vida activo y enseñarte importantes lecciones sobre responsabilidad y empatía. Sin embargo, es esencial considerar cuidadosamente tus circunstancias y recursos antes de adoptar una mascota para garantizar que puedas proporcionarles el cuidado y el amor que merecen.</p>
                      </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    @endsection
