<nav class="navbar navbar-expand-md bg-body-tertiary bg-warning border-3 border-bottom border-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('start')}}">
        <img src="{{asset('img/logo.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        PetFinder
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @if(Auth::user()->tipo == 'admin')
          <li class="nav-item">
            <a class="nav-link {{ request()->route()->getName() === 'Panel-Administrador' ? 'active' : '' }}" aria-current="page" href="{{route('Panel-Administrador')}}">Panel de administrador</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link {{ request()->route()->getName() === 'start' ? 'active' : '' }}" aria-current="page" href="{{route('start')}}">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mascotas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('publicacion.index')}}">Todas las mascotas</a></li>
              <li><a class="dropdown-item" href="{{route('canino')}}">Canino</a></li>
              <li><a class="dropdown-item" href="{{route('felino')}}">Felino</a></li>
              @if(Auth::user()->tipo == 'admin')
              <li><a class="dropdown-item" href="{{route('publicacion.create')}}">Crear mascota</a></li>
              @endif            
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('start')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Productos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('product.index')}}">Ver productos</a></li>
              @if(Auth::user()->tipo == 'admin')
              <li><a class="dropdown-item" href="{{route('product.create')}}">Crear producto</a></li>
              @endif
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
       
        
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
         @if(Auth::user()->profile_photo_path)     
        <img class="img-thumbnail rounded-circle" style="width: 50px; height: 50px;" src="{{ asset('storage/'.Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />
        @else
        <img class="img-thumbnail rounded-circle" style="width: 50px; height: 50px;" src="{{ asset('img/perfilalea.jpg') }}" alt="{{ Auth::user()->name }}" />
        @endif
        @endif
        
             
               
      </div>
    </div>
  </nav>
