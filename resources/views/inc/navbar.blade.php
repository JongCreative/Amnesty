<div class="site">
    <ul class="nav">
        <li><img src="/img/Logo.png" height="80px" /></li>
        <li><a href="/">Home</a></li>
        <li>
            <a href="#">Inzendingen</a>
            <ul class="nav_child">
                <li><a href="/photos">Gallery</a></li>
                <li><a href="#">Winnaars</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Wedstrijd</a>
            <ul class="nav_child">
                <li><a href="#">Voorwaarden</a></li>
                <li><a href="{{ route('jury') }}">Jury</a></li>
                <li><a href="#">Sposoren</a></li>
                <li><a href="#">Pers</a></li>
            </ul>
        </li>
    </ul>
    @if (Route::has('login')) @auth
        <li><a href="/dashboard">Home</a></li>
            @else
            <li><a href="{{ route('login') }}" class="register">login</a></li>
    
        @if (Route::has('register'))
            <li><a href="{{ route('register') }} " class="login">Register</a></li>
    @endif @endauth @endif
</div>
