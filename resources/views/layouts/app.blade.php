<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amnesty') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main_container">
        <section class="main_positioning main_positioning1-2">
            @include('inc.navbar')
        </section>
        <section class="main_positioning main_positioning2-2">
            <main>
                <div class="page pagetitle">
                    @yield('pagetitle')
                </div>
                <div class="page page_content">
                    @yield('content')
                </div>
            </main>
        </section>
    </div>
</body>

</html>