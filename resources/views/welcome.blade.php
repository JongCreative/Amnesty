<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/app.css" rel="stylesheet">

        <title>Laravel</title>       
    </head>
    <body>
        <ul class="nav">
            <li><img src="img/Logo.png" height="80px"></li>
            <div>
            <li><a href="/">Home</a></li>
            <li>Inzendingen
                <ul class="nav_child">
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/winners">Winnaars</a></li>
                </ul></li>
            <li>Wedstrijd
                <ul class="nav_child">
                    <li><a href="/terms">Voorwaarden</a></li>
                    <li><a href="/jury">Jury</a></li>
                    <li><a href="/sponsors">Sposoren</a></li>
                    <li><a href="/press">Pers</a></li>
                </ul></li></div>
 @if (Route::has('login'))
    @auth
    <div>
<li><a href="/dashboard" class="dashboard">Dashboard</a></li>
                    <li><a  href="{{ route('logout') }}" class="logout"
                                onclick="event.preventDefault();
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
    @endauth
  @endif
        </ul>

<div class="debug">
<label><input type="checkbox"> Debug</label>
</div>

<div class=landingpage>
<div class="parallax">
    <div id="group1" class="parallax_group">
        <div class="parallax_layer parallax_layer_back">
        </div>
        <div class="parallax_layer parallax_layer_base">
            <div class="hpblok">
                <div class="subtitle">Amnesty International Fotowedstijd</div>
                <div class="title">Hoe ziet vluchten er voor jou uit?</div><br>
                <p>Deze eerste editie 2019 heeft als thema "vluchten". Met mooie prijzen en maandelijkse winnaars. Iederereen mag mee doen. Van professionals tot hobbyisten. De sluitingsdatum voor de hoofdprijs is 31 decmeber 2019.</p>
                <div class="button">Doe mee!</div>
            </div>
        </div>
    </div>
    <div id="group2" class="parallax_group">
      <div class="parallax_layer parallax_layer_base">
  <!-- start content parallax -->
        <div class="textheader">
          <div class="title">Amnesty International fotowedstrijd<br>
          <div class="sub">Vluchten</div></div>
          <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
        </div>
          <div class="content_wrapper">
                <div class="block">
                  <div class="title">De wedstrijd</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <div class="button">Deelnemen</div>
                </div>
                <div class="block">
                <div class="title">Series</div>
                <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <div class="button">Deelnemen</div>
                </div>
                <div class="block">
                  <div class="title">Enkele foto's</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>              
                  <div class="button">Deelnemen</div>
                </div>
          </div>
          <div class="textheader">
        <div class="title">Elke maand een winnaar<br>
        <div class="sub">Augustus: Venetie</div></div>
        <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
        <div class="button">Deelnemen</div>
      </div>   
  <!-- end content parallax -->          
      </div>
    </div>
    <div id="group3" class="parallax_group">
        <div class="parallax_layer parallax_layer_base">
        </div>
        <div class="parallax_layer parallax_layer_back">
        </div>
    </div>
    <div id="group4" class="parallax_group">
        <div class="parallax_layer parallax_layer_base">
  <!-- start content parallax -->
        <div class="textheader">
          <div class="title">De prijzen<br>
          <div class="sub">Prachtige prijzen</div></div>
          <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
        </div>
          <div class="content_wrapper">
                <div class="block">
                  <div class="title">Hoofdprijs</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <div class="button">meer info</div>
                </div>
                <div class="block">
                <div class="title">2e prijs</div>
                <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <div class="button">meer info</div>
                </div>
                <div class="block">
                  <div class="title">3e prijs</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>              
                  <div class="button">meer info</div>
                </div>
          </div>
        <div class="textheader">
        <div class="title">Winnaar van de maand<br>
        <div class="sub">Elke maand een stedentrip</div></div>
        <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
        <div class="button">Venetie</div>
      </div>
  <!-- end content parallax -->
        </div>
    </div>
    <div id="group5" class="parallax_group">
        <div class="parallax_layer parallax_layer_back">
        </div>
        <div class="parallax_layer parallax_layer_base">
        </div>
    </div>
    <div id="group6" class="parallax_group">
        <div class="parallax_layer parallax_layer_base">
  <!-- start content parallax -->
  <div class="textheader">
          <div class="title">De Jury<br>
          <div class="sub">Lorem ipsum dolor sit amet</div></div>
          <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
        </div>
          <div class="content_wrapper">
                <div class="block">
                  <div class="title">Jury 1</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div><img src="/img/jury1.jpg" alt="" height="200"></div>                  
                  <div class="txt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <!--<div class="button">meer info</div>-->
                </div>
                <div class="block">
                <div class="title">Jury 2</div>
                <div class="sub">Lorem ipsum dolor sit amet</div>
                <div><img src="/img/jury2.jpg" alt="" height="200"></div>                  
                  <div class="txt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <!--<div class="button">meer info</div>-->
                </div>
                <div class="block">
                  <div class="title">Jury 3</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div><img src="/img/jury3.jpg" alt="" height="200"></div>                  
                  <div class="txt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  </div>
          </div>
          <div class="content_wrapper">
                <div class="block">
                  <div class="title">Jury 4</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div>
                  <div><img src="/img/jury4.jpg" alt="" height="200"></div>                  
                  <div class="txt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <!--<div class="button">meer info</div>-->
                </div>
                <div class="block">
                <div class="title">Jury 5</div>
                <div class="sub">Lorem ipsum dolor sit amet</div>
                <div><img src="/img/jury5.jpg" alt="" height="200"></div>                  
                  <div class="txt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <!--<div class="button">meer info</div>-->
                </div>
                <div class="block">
                  <div class="title">Jury 6</div>
                  <div class="sub">Lorem ipsum dolor sit amet</div><div>
                  <img src="/img/jury6.jpg" alt="" height="200"></div>                  
                  <div class="txt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                  <!--<div class="button">meer info</div>-->
                </div>
          </div>
  <!-- end content parallax -->
        </div>
    </div>
    <div id="group7" class="parallax_group">
        <div class="parallax_layer parallax_layer_back">
        </div>
    </div>
</div>
</div>
  
<div class="forms_container">
  <div class="form_container">
    <div class="header">Deelnemen</div>
    <form>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker<br>
    <p></p>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="country">Select</label>
    <select id="select iets" name="select iets">
      <option value="1">eerste optie</option>
      <option value="2">tweede optie</option>
      <option value="3">derde optie</option>
    </select>
    <p></p>
    <input type="radio" name="check" value="check"> ik ga accoord
  <p></p>
    <input type="submit" value="Submit">  
  </form>
    </div>
    <div class="form_container">
    <div class="header">Registreren</div>
    <form>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker<br>
    <p></p>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="country">Select</label>
    <select id="select iets" name="select iets">
      <option value="1">eerste optie</option>
      <option value="2">tweede optie</option>
      <option value="3">derde optie</option>
    </select>
    <p></p>
    <input type="radio" name="check" value="check"> ik ga accoord
  <p></p>
    <input type="submit" value="Submit">  
  </form>
    </div>
    <div class="form_container">
    <div class="header">Upload</div>
    <form>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker<br>
    <p></p>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="country">Select</label>
    <select id="select iets" name="select iets">
      <option value="1">eerste optie</option>
      <option value="2">tweede optie</option>
      <option value="3">derde optie</option>
    </select>
    <p></p>
    <input type="radio" name="check" value="check"> ik ga accoord
  <p></p>
    <input type="submit" value="Submit">  
  </form>
    </div>
  </div>
</div>

<a href="#" class="button"><span>Ik doe mee</span></a>  
<a href="#" class="button button_sm"><span>registreren</span></a>  
<a href="#" class="button button_act"><span>ik doe mee</span></a>                         


<script>
    var debugInput = document.querySelector("input");
    function updateDebugState() {
        document.body.classList.toggle('debug-on', debugInput.checked);
    }
    debugInput.addEventListener("click", updateDebugState);
    updateDebugState();
    </script>
</body>
</html>
