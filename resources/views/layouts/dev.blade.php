<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="site">
        <ul class="nav">
            <li><img src="/img/Logo.png" height="80px"></li>
            <li><a href="/">Home</a></li>
            <li><a href="#">Inzendingen</a>
                <ul class="nav_child">
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Winnaars</a></li>
                </ul></li>
            <li><a href="#">Wedstrijd</a>
                <ul class="nav_child">
                    <li><a href="#">Voorwaarden</a></li>
                    <li><a href="{{ route('jury') }}">Jury</a></li>
                    <li><a href="#">Sponsoren</a></li>
                    <li><a href="#">Pers</a></li>
                </ul></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="/dashboard">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="register">login</a></li>

                        @if (Route::has('register'))
                           <li><a href="{{ route('register') }} " class="login">Register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>     
        </div>  

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>