<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>{{config('app.name')}}</title>
</head>
<body style="max-height: 100vh; max-width: 100%;overflow-x: hidden;">
    <main class="positioning_main">

        <div class="positioning positioning1">
            @include('inc.navbar')
        </div>
        <div class="positioning positioning2">
            <div style="padding: 20px; background-color: #c7c2ba;">
                @include('inc.daisyMessages')
            </div>
        </div>
        <div class="positioning positioning3" style="display:flex; flex-direction: column;">
            <div style="padding: 20px; background-color: #c7c2ba">
                @yield('content')
            </div>
        </div>

    </main>
</body>
</html>