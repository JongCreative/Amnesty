<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/app.css" rel="stylesheet">

        <title>Laravel</title>

     
        
    </head>
    <body>
    <div>
<a href="#" class="button">
                            <span>Ik doe mee</span>
                        </a>  

                        <a href="#" class="button button_sm">
                            <span>registreren</span>
                        </a>  

                        <a href="#" class="button button_act">
                            <span>ik doe mee</span>
                        </a>
                        <h1>gewone h1 tekst</h1> 
                        <p>paragraaftekst</p> 

                        </div>
 <nav>
  <ul id="menu">
    <li><img src="/img/Logo.png" height="50px"></li>
    <li><a href="#">Home</a></li>
    <li><a href="#">Inzendingen</a>
      <ul class="hidden">
        <li><a href="/photos">Gallery</a></li>
        <li><a href="#">Winnaars</a></li>
      </ul>
    </li>
    <li><a href="#">Wedstrijd</a>
      <ul class="hidden">
        <li><a href="#">Voorwaarden</a></li>
        <li><a href="#">Jury</a></li>
        <li><a href="#">Sposoren</a></li>
        <li><a href="#">Pers</a></li>
      </ul>
    </li>
  @if (Route::has('login'))
    @auth
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ route('login') }}" class="button">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }} " class="button button_sm">Register</a>
        @endif
    @endauth
  @endif
  </ul>
</nav>
<p></p>
<p></p>


                       
            
    </body>
</html>
