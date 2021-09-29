<nav class="navbar autohide navbar-expand-lg navbar-light bg-light1 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Proyectofinal.es</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.categoria')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                                href="{{route('category.ads',['name'=>$category->name,'id'=>$category->id])}}">{{$category->name}}</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        @endforeach
                    </ul>

                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ad.new') }}">{{__('ui.upload')}}</a>
                </li>




                @include('layouts._locale',["lang"=>'es','nation'=>'es'])

                @include('layouts._locale',["lang"=>'en','nation'=>'gb'])

                @include('layouts._locale',["lang"=>'it','nation'=>'it'])



            </ul>

            <ul class="navbar-nav ">

                <li class="nav-item">

                    <form action="{{ route('search') }}" method="GET" class="d-flex">
                        <input class="form-control me-2" type="text" name="q" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>

                </li>


                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}"><span>{{__('ui.login')}}</span></a>
                </li>
                @endif


                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}"><span>{{__('ui.register')}}</span></a>
                </li>
                @endif
                @else



                <li class="nav-item">
                    <form id="logoutForm" action="{{route('logout')}}" method="POST">
                        @csrf
                    </form>
                    <a id="logoutBtn" class="nav-link" href="#">{{__('ui.logout')}}</a>
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






                @endguest

            </ul>



        </div>
    </div>
</nav>
