
@include('layouts._locale',["lang"=>'es','nation'=>'es'])  
@include('layouts._locale',["lang"=>'en','nation'=>'gb'])  
@include('layouts._locale',["lang"=>'it','nation'=>'it'])  

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger text-decoration-none text-reset prontologo"
            href="{{ route('home') }}">Proyectofinal.es</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


             @auth
            @if (Auth::user()->is_revisor)
            <li class="nav-item">
            <a class="nav-link" href="{{ route('revisor') }}">
             Revisor Casa
            <span class="badge rounded-pill bg-danger">
            {{\App\Models\Ad::ToBeRevisionedCount() }}
            </span>
            </a>
           </li>
           @endif
           @endauth

          
            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="flag-icon flag-icon-es"></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="flag-icon flag-icon-gb"></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="flag-icon flag-icon-it"></span>
                </a>
            </li>


                
 @endguest
    </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>