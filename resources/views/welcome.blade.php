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
{{--             <div class="title">Amnesty International fotowedstrijd<br>
              <div class="sub">{{ $contestData->theme }}</div>
            </div>
            <div class="txt">Wedstrijd eindigt op {{ $contestData->endDate }}</div> --}}
          </div>

          <div class="parallax_content_wrapper">
            <div class="block">

              <div class="title">De wedstrijd</div>
              <div class="sub"></div>
              <div class="txt">Wereldwijd zijn miljoenen mensen op de vlucht. Wat is jouw beeld bij vluchten?  Je zou hierbij kunnen denken aan de omstandigheden, een verscheidenheid aan emoties of misschien denk jij aan iets heel anders als jij aan het thema vluchten denkt. AI daagt jou uit om vluchten op jouw manier in  beeld te brengen.</div>
              <div class="button">Deelnemen</div>
            </div>
            <div class="block">
              <div class="title">Inzendingen</div>
              <div class="sub"></div>
              <div class="txt">De inzendingen moeten voldoen aan de volgende voorwaarden:
                <br />
                  1. Je mag max 3 fotos inzenden<br />
                  2. Het vereiste formaat is max 2 mb in jpg per ingezonden foto.<br />
                  3. Het beeld moet jouw eigen creatie zijn<br />
                  4. Het beeld mag naar eigen wens bewerkt zijn.<br /><br />
                  De deadline voor de inzendingen is {{ $contestData->endDate }}.
              </div>
              <div class="button">Deelnemen</div>
            </div>
            <div class="block">
              <div class="title">Dit kan je winnen</div>
              <div class="sub">Verschillende prijzen dankzij onze sponsors</div>
              <div class="txt">
                De hoofdprijs is {{ $contestData->mainPrize }} <br />
                De 2e prijs is {{ $contestData->secondPrize }} <br />
                De 3e prijs is {{ $contestData->thirdPrize }} <br />
              </div>
              <div class="button">Deelnemen</div>
            </div>
          </div>
          <div class="textheader">
{{--             <div class="title">Elke maand een winnaar<br>
              <div class="sub">{{ $contestData->currentPrize }}</div>
            </div>
            <div class="txt">{{ $contestData->monthDescr }}</div>
            <div class="button">Deelnemen</div> --}}
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
              <div class="sub"></div>
            </div>
            <div class="txt"></div>
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
              <div class="sub"></div>
            </div>
            <div class="txt">De beoordeling van de fotos worden aan deze specialisten overgelaten.</div>
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

</body>

</html>
