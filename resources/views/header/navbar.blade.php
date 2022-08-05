<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #041466;">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="logo"> <a href="{{route('welcome')}}"><img src="{{asset('img/logo-img.png')}}" alt=""></a> </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('descricao')}}">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contactos.criar-c')}}">Fale Conosco</a>
          </li>
        </ul>
        <form class="d-flex" action="{{route('search')}}" method="GET">
            @csrf
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Pesquisar">
          <button class="btn btn-outline-info" style="border-radius: 5px;" type="submit">Pesquisar</button>
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                @if (Route::has('login'))
                    <div class="nav-link">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark" style="border-radius: 5px; text-decoration: none;">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-success"  style="border-radius: 5px;">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-danger"  style="border-radius: 5px;">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </li>
        </ul>
      </div>
    </div>
  </nav>
