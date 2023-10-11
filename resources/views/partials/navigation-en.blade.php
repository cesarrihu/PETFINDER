<nav class="navbar navbar-expand-md bg-body-tertiary bg-warning border-3 border-bottom border-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('miwelcome')}}">
        <img src="{{asset('img/logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        PetFinder
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->route()->getName() === 'start' ? 'active' : '' }}" aria-current="page" href="{{route('start')}}">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mascotas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('profile.show') }}">Ver perfil</a></li>
                  <li><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" href="{{ route('logout') }}"
                        @click.prevent="$root.submit();">Cerrar sesion</button>
                </form></li>
                </ul>
              </li>
        </ul>
                    
      </div>
    </div>
  </nav>