<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/app.css" rel="stylesheet">

        <title>Laravel</title>       
    </head>
    <body>
    <div class="site">
        <ul class="nav">
            <li><img src="img/Logo.png" height="80px"></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Inzendingen</a>
                <ul class="nav_child">
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Winnaars</a></li>
                </ul></li>
            <li><a href="#">Wedstrijd</a>
                <ul class="nav_child">
                    <li><a href="#">Voorwaarden</a></li>
                    <li><a href="#">Jury</a></li>
                    <li><a href="#">Sposoren</a></li>
                    <li><a href="#">Pers</a></li>
                </ul></li>
 @if (Route::has('login'))
    @auth
        <li><a href="{{ url('/home') }}">Home</a></li>
    @else
        <li><a href="{{ route('login') }}" class="register">login</a></li>

        @if (Route::has('register'))
           <li><a href="{{ route('register') }} " class="login">Register</a></li>
        @endif
    @endauth
  @endif
        </ul>     
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
</body>
</html>
