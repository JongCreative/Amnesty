<nav class="navbar_container">
  <ul class="nav">
    <li><img src="{{URL ('img/Logo.png')}}" height="80px"></li>
    <div class="nav_screen">
      <li><a href="/">Home</a></li>
      <li><a href="/photos">Gallery</a></li>
      <li>Wedstrijd
        <ul class="nav_child">
          <li><a href="/terms">Voorwaarden</a></li>
          <li><a href="/jury">Jury</a></li>
          <li><a href="/sponsors">Sposoren</a></li>
          <li><a href="/press">Pers</a></li>
        </ul>
      </li>
    </div>

    <div class="nav_screen">
      <!-- Authentication Links -->
      @guest
        <li><a class="login" href="{{ route('login') }}">{{ __('Login') }}</a></li>
        @if (Route::has('register'))
          <li><a class="register" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @endif
      @else
        <li>
        <li>{{Auth::user()->name}}
          <ul class="nav_child">
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/photos/create">upload photo</a></li>
          </ul>
        <li><a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}</a>
        </li>

        <ul class="nav_child">
          <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
        </li>
      @endguest
    </div>
  </ul>
</nav>
