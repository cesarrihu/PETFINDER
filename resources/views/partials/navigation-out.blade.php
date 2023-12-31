<nav class="navbar navbar-expand-md bg-body-tertiary bg-warning border-3 border-bottom border-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
        <img src="{{asset('img/logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        PetFinder
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->route()->getName() === 'welcome' ? 'active' : '' }}" aria-current="page" href="{{route('welcome')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->route()->getName() === 'about' ? 'active' : '' }}" href="{{route('about')}}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->route()->getName() === 'Help' ? 'active' : '' }} " href="{{route('Help')}}">Ayudanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Adopta...</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->route()->getName() === 'login' ? 'active' : '' }}" href="{{route('login')}}">Iniciar Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->route()->getName() === 'registro' ? 'active' : '' }}" href="{{route('registro')}}">Registrarse</a>
              </li>
        </ul>
                    
      </div>
    </div>
  </nav>

  