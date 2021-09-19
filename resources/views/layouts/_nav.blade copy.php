
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger text-decoration-none text-reset prontologo"
            href="{{ route('home') }}">Proyectofinal.es</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
       
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{route('category.ads',['name'=>$category->name,'id'=>$category->id])}}">{{$category->name}}</a></li>
              <li><hr class="dropdown-divider"></li>
              @endforeach
            </ul>
          </li>

                @guest
                @if (Route::has('login'))
                <li class="nav-item mx-0 mx-lg-1 ">
                    <a class="borderMarcador nav-link text-lowercase py-3 px-0 px-lg-3 rounded js-scroll-trigger text-decoration-none text-reset"
                        href="{{route('login')}}"><span>Login</span></a>
                </li>
                @endif    
                @if (Route::has('register'))
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="borderMarcador nav-link text-lowercase py-3 px-0 px-lg-3 rounded js-scroll-trigger text-decoration-none text-reset"
                        href="{{route('register')}}"><span>Register</span></a>
                </li>
                @endif
                @else
                <li class="nav-item mx-0 mx-lg-1">
                    <form id="logoutForm" action="{{route('logout')}}" method="POST">
                        @csrf
                    </form>
                    <a id="logoutBtn"
                        class=" nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-decoration-none text-reset"
                        href="#">Logout</a>
                </li>

                 <li class="nav-item py-2">
                  <a class="nav-link text-lowercase text-decoration-none text-reset" href="{{ route('ad.new') }}">
                  Nuevo Anuncio
                  </a>
                </li>

          

                
 @endguest
    </ul>
        </div>
    </div>
</nav>