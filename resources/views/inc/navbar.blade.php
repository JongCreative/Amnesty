<div class="site">
    <ul class="nav">
        <li><img src="/img/Logo.png" height="80px"></li>
        <li><a href="/">Home</a></li>
        <li><a href="/photos">Inzendingen</a>
            <ul class="nav_child">
                <li><a href="/photos">Gallery</a></li>
                <li><a href="#">Winnaars</a></li>
            </ul></li>
        <li><a href="#">Wedstrijd</a>
            <ul class="nav_child">
                <li><a href="#">Voorwaarden</a></li>
                <li><a href="{/jury">Jury</a></li>
                <li><a href="/sponsors">Sponsoren</a></li>
                <li><a href="/press">Pers</a></li>
            </ul></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="register">login</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }} " class="login">Register</a></li>
                    @endif
                @endauth
            @endif
    </ul>     
</div> 