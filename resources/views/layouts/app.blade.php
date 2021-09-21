
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300&display=swap" rel="stylesheet"> 
    <!-- Styles -->
<link rel="stylesheet" href="{{mix('css/app.css')}}">





</head>
<body>

@if(session('access.denied.revisor.only'))
    <div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
@endif

    <div id="app">
        @include('layouts._nav')
        @if(session('ad.create.success'))
    <div class="alert alert-success">{{session('ad.create.success')}}</div>
        @endif

        <main class="container-fluid py-4">
            @yield('content')
        </main>
        </div>
        <!-- Scripts -->
<script src="{{mix('js/app.js')}}"></script>



<script>
        const logout = document.getElementById('logoutBtn');
        if (logout) {
            logout.addEventListener('click', (e) => {
                e.preventDefault();
                const form = document.getElementById('logoutForm').submit();
            });
        }

        
 </script>

</body>
</html>
