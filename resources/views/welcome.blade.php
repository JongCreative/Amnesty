<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/app.css" rel="stylesheet">

  <title>Laravel</title>
</head>

<body>
    @include('inc.navbar')

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
            <p>Deze eerste editie 2019 heeft als thema "vluchten". Met mooie prijzen en maandelijkse winnaars. Iederereen mag mee doen. Van professionals tot hobbyisten. </p>
            <p>De sluitingsdatum voor de hoofdprijs is {{ $contestData->endDate }}</p>
            <div class="button"><a href="/photos">Doe mee!</a></div>
          </div>
        </div>
      </div>
      <div id="group2" class="parallax_group">
        <div class="parallax_layer parallax_layer_base">
          <!-- start content parallax -->
          <div class="textheader">
            <div class="title">Amnesty International fotowedstrijd<br>
              <div class="sub">{{ $contestData->theme }}</div>
            </div>
            <div class="txt">Wedstrijd eindigt op {{ $contestData->endDate }}</div>
          </div>
          <div class="parallax_content_wrapper">
            <div class="block">
              <div class="title">De wedstrijd</div>
              <div class="sub">Lorem ipsum dolor sit amet</div>
              <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <div class="button"><a href="/photos/create">Deelnemen</a></div>
            </div>
            <div class="block">
              <div class="title">Series</div>
              <div class="sub">Lorem ipsum dolor sit amet</div>
              <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <div class="button"><a href="/photos/create">Deelnemen</a></div>
            </div>
            <div class="block">
              <div class="title">Enkele foto's</div>
              <div class="sub">Lorem ipsum dolor sit amet</div>
              <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <div class="button"><a href="/photos/create">Deelnemen</a></div>
            </div>
          </div>
          <div class="textheader">
            <div class="title">Elke maand een winnaar<br>
              <div class="sub">{{ $contestData->currentPrize }}</div>
            </div>
            <div class="txt">{{ $contestData->monthDescr }}</div>
            <div class="button"><a href="/photos/create">Deelnemen</a></div>
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
              <div class="sub">Prachtige prijzen</div>
            </div>
            <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
          </div>
          <div class="parallax_content_wrapper">
            <div class="block">
              <div class="title">Hoofdprijs</div>
              <div class="sub">{{ $contestData->mainPrize }}</div>
              <div class="txt">{!! nl2br(e($contestData->mainDescr)) !!}</div>
              <div class="button"><a href="#">meer info</a></div>
            </div>
            <div class="block">
              <div class="title">2e prijs</div>
              <div class="sub">{{ $contestData->secondPrize }}</div>
              <div class="txt">{!! nl2br(e($contestData->secondDescr)) !!}</div>
              <div class="button"><a href="#">meer info</a></div>
            </div>
            <div class="block">
              <div class="title">3e prijs</div>
              <div class="sub">{{ $contestData->thirdPrize }}</div>
              <div class="txt">{!! nl2br(e($contestData->thirdDescr)) !!}</div>
              <div class="button"><a href="#">meer info</a></div>
            </div>
          </div>
        </div>
        <div class="textheader">
          <div class="title">Winnaar van de maand<br>
            <div class="sub">Elke maand een stedentrip</div>
          </div>
          <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
          <div class="button"><a href="#">Venetie</a></div>
        </div>
        <!-- end content parallax -->
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
              <div class="sub">Lorem ipsum dolor sit amet</div>
            </div>
            <div class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn</div>
          </div>

          <div class="parallax_content_wrapper">
            @foreach($juryMembers as $jury)
            <div class="block">
              <div class="title">{{ $jury->name }}</div>
              <div class="sub">{{ $jury->title }}</div>
              <div><img src="/img/avatar/{{ $jury->avatar }}" alt="{{ $jury->name }}" height="200"></div>
              <div class="txt">{!! nl2br(e($jury->descr)) !!}</div>
              <!--<div class="button">meer info</div>-->
            </div>
            @endforeach
          </div>
        </div>

        <!-- end content parallax -->
      </div>
      <div id="group7" class="parallax_group">
        <div class="parallax_layer parallax_layer_back">
        </div>
      </div>
    </div>

  </div>

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
