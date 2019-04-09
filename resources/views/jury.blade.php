@extends('layouts.app')

@section('pagetitle', 'Jury')

@section('content')

<div class="grid_container">
    <div class="jury_card">
        <img src="{{url('/img/avatar/default.png')}}" alt="">
        <div class="card_name">Pietje Puk</div>  
        <div class="card_title">Beeldredacteur NRC Handelsblad</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
    <div class="jury_card">
        <img src="{{url('/img/avatar/default.png')}}" alt="">
        <div class="card_name">Pietje Puk</div>  
        <div class="card_title">Beeldredacteur NRC Handelsblad</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
    <div class="jury_card">
        <img src="{{url('/img/avatar/default.png')}}" alt="">
        <div class="card_name">Pietje Puk</div> 
        <div class="card_title">Beeldredacteur NRC Handelsblad</div>
        <div class="card_description">en als deze tekst anders wordt wat gebeurt er dan met de hoogte van mijn kaartje..Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera. En wat als het gewoon nog meer tekst heeft? Er mag dus niet meer tekst in komen dan in max 135 height past.</div>
    </div>
    <div class="jury_card">
        <img src="{{url('/img/avatar/default.png')}}" alt="">
        <div class="card_name">Pietje Puk</div>  
        <div class="card_title">Beeldredacteur NRC Handelsblad</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
    <div class="jury_card">
        <img src="{{url('/img/avatar/default.png')}}" alt="">
        <div class="card_name">Pietje Puk</div>  
        <div class="card_title">Beeldredacteur NRC Handelsblad</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
    </div>
</div>

{{-- <div class="grid_jury">
    <div class="jury_card flex_wrap">
        @foreach($juryMembers as $juryMember)
            <a href="users/{{ $juryMember->id }}">
                <img src="{{url('/img/jury1.jpg')}}" alt="">
                <div class="name">{{ $juryMember->name }}</div>
                <div class="title">Donateur</div>
                <div class="description">{!! nl2br(e($juryMember->descr)) !!}</div>
            </a>
        @endforeach
    </div>
</div> --}}

{{-- <article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes 
            @include('inc.messages')
        </article>
        <article class="content_wrapper">
            <a class="button button_act" href="/photos/create">join the contest</a>
        </article>
    </div>
    <div class="content_positioning cards_container">
    @foreach($juryMembers as $juryMember)
        <article class="content_wrapper flex_column card_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">{{ $juryMember->title }}</p>
            </section>
            <section class="content_sub_wrapper">
                <div><a href="/sponsors/{{ $juryMember->id }}"><img class="img_size" src="img/avatar/{{ $juryMember->avatar }}"/></a></div>
                <div class="description">{!! nl2br(e($juryMember->descr)) !!}</div>
                <div class="name">{{ $juryMember->name }}</div>
                {{-- <img src="{{url('/img/jury1.jpg')}}" alt=""> 
            </section>
        </article>
    @endforeach
    </div>
    <div class="content_positioning">
        <article class="content_wrapper flex_row">

        </article>
    </div>
</article> --}}
@endsection

