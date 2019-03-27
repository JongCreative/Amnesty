<nav class="navbar_container">
    <ul class="nav">
        <li><img src="img/Logo.png" height="80px"></li>
        <div>
            <li><a href="/">Home</a></li>
            <li>Inzendingen
                <ul class="nav_child">
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/winners">Winnaars</a></li>
                </ul>
            </li>
            <li>Wedstrijd
                <ul class="nav_child">
                    <li><a href="/terms">Voorwaarden</a></li>
                    <li><a href="/jury">Jury</a></li>
                    <li><a href="/sponsors">Sposoren</a></li>
                    <li><a href="/press">Pers</a></li>
                </ul>
            </li>
        </div>
        @if (Route::has('login')) @auth
        <div>
            <li><a href="/dashboard" class="dashboard">Dashboard</a></li>
            <li><a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </div>
        @else
        <div class>
            <li><a href="{{ route('login') }}" class="login">login</a></li>

            @if (Route::has('register'))
            <li><a href="{{ route('register') }} " class="register">Register</a></li>
            @endif
        </div>
        @endauth @endif
    </ul>
</nav>