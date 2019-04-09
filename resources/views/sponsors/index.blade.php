@extends('layouts.app')

@section('pagetitle', 'Sponsor details')

@section('content')

<div class="grid_container">
    <div class="sponsor_card">
        <img src="{{url('/img/logo/default.png')}}" alt="">
        <div class="card_name">Daisy Jong</div>  
        <div class="card_title">Fullstack webdevelopment</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/logo/default.png')}}" alt="">
        <div class="card_name">Erwin Koster</div>  
        <div class="card_title">Backend webdevelopment</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
    <div class="jury_card">
        <img src="{{url('/img/avatar/default.png')}}" alt="">
        <div class="card_name">Pietje Puk</div> 
        <div class="card_title">Beeldredacteur NRC Handelsblad</div>
        <div class="card_description">en als deze tekst anders wordt wat gebeurt er dan met de hoogte van mijn kaartje..Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera. En wat als het gewoon nog meer tekst heeft? Er mag dus niet meer tekst in komen dan in max 135 height past.</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/logo/default.png')}}" alt="">
        <div class="card_name">Esmeralda Holman</div>  
        <div class="card_title">Frontend webdevelopment</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/logo/default.png')}}" alt="">
        <div class="card_name">Thomas Huster</div>  
        <div class="card_title">Project manager</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
</div>

{{-- <article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes 
            @include('inc.messages')
        </article>

        @guest @else @if (Auth::user()->admin)
        <article class="content_wrapper">
            <a href="/press/create">Add new press article</a>
        </article>
        @endif @endguest
    </div>
    <div class="content_positioning cards_container">
    @foreach($sponsors as $sponsor)
        <article class="content_wrapper flex_column card_wrapper">
            <section class="content_sub_wrapper card_sub_wrapper flex_wrap">
                <div class="flex_1 center_content">
                    {{-- <img src="/img/logo/{{ $sponsor->logo }}" alt="{{ $sponsor->name }}'s logo" /> 
                    <img src="https://pbs.twimg.com/profile_images/931190512731807746/yO8Lcr9H_400x400.jpg" alt="{{ $sponsor->name }}'s logo" />
                </div>
                <div class="flex_2 flex_column center_content">
                    <p class="h2 center_content">{{ $sponsor->name }}</p>
                    <div class="h3 center_content">{!! nl2br(e($sponsor->contribution)) !!}</div>
                    <div>{{ $sponsor->title }}</div>

                    @guest @else @if (Auth::user()->admin)
                    <div><a href="sponsors/{{ $sponsor->id }}">Show single sponsor</a></div>
                    @endif @endguest
                </div>
            </section>
            <section class="whitespace"></section>
        </article>
    @endforeach

    <div class="content_positioning">
        <article class="content_wrapper flex_row">
        {{ $sponsors->links() }}
        </article>
    </div>
</article> --}}
@endsection