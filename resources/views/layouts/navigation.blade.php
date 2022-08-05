<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #041466;">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="logo"> <a href="{{route('dashboard')}}"><img src="{{asset('img/logo-img.png')}}" alt=""></a> </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>Notícias</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('noticias.index-n')}}">Listar</a></li>
                    <li><a class="dropdown-item" href="{{route('noticias.criar-n')}}">Criar</a></li>
                  </ul>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>Novidades</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('novidades.listar-no')}}">Listar</a></li>
                    <li><a class="dropdown-item" href="{{route('novidades.criar-no')}}">Criar</a></li>
                  </ul>
                </li>
            </ul>
        </ul>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle btn btn-outline-warning" style="border-radius: 5px;" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>{{ Auth::user()->name }}</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li class="dropdown-item">{{ Auth::user()->email }}</li>
                    <li class="dropdown-item">{{ Auth::user()->categoria }}</li>
                  </ul>
                </li>
            </ul>
            <!-- Authentication -->
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            class="btn btn-danger"
                            style="border-radius: 5px;"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </li>
        </ul>
      </div>
    </div>
  </nav>




{{-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #041466;">
    <div class="container-fluid">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="{{asset('img/JIO1.png')}}" target="_blank"><img src="{{asset('img/JIO1.png')}}" class="img-circle" alt="Brand" width="50" height="50" /></a>
            </li>
            <li class="nav-item"><a class="nav-link active" arial-current="page" href="{{route('dashboard')}}"><strong>HOME</strong></a></li>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>NOTÍCIAS</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('noticias.index-n')}}">Listar</a></li>
                    <li><a class="dropdown-item" href="{{route('noticias.criar-n')}}">Criar</a></li>
                  </ul>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>NOVIDADES</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-primary" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('novidades.listar-no')}}">Listar</a></li>
                    <li><a class="dropdown-item" href="{{route('novidades.criar-no')}}">Criar</a></li>
                  </ul>
                </li>
            </ul>
        </ul>
        <div class="navbar-nav">
            <li class="nav-item">
                <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 5px;">Auth
                </button>
                <ul class="dropdown-menu my-0" aria-labelledby="dropdownMenuButton1">
                    <li class="dropdown-item">{{ Auth::user()->name }}</li>
                    <li class="dropdown-item">{{ Auth::user()->email }}</li>
                    <li class="dropdown-item">{{ Auth::user()->categoria }}</li>
              </ul>
            </li>
            <li class="nav-item"></li>
            <li class="nav-item"></li>
            <!-- Authentication -->
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            class="btn btn-danger"
                            style="border-radius: 5px;"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </li>
        </div>
      </div>
    </nav> --}}
