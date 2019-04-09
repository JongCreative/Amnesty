@extends('layouts.app')

@section('pagetitle', 'All press articles')

@section('content')
<div class="press_container">
    <div class="press_card">
        <div class="card_name">Amnesty organiseert eerste editie photwedstrijd</div>  
        <div class="card_date">15 maart 2020</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
        <div class="card_link">naar het artikel van het AD.nl</div> 
    </div>
    <div class="press_card">
        <div class="card_name">Amnesty organiseert eerste editie photwedstrijd</div>  
        <div class="card_date">15 maart 2020</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
        <div class="card_link">naar het artikel van het AD.nl</div> 
    </div>
    <div class="press_card">
        <div class="card_name">Amnesty organiseert eerste editie photwedstrijd</div>  
        <div class="card_date">15 maart 2020</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
        <div class="card_link">naar het artikel van het AD.nl</div> 
    </div>
    <div class="press_card">
        <div class="card_name">Amnesty organiseert eerste editie photwedstrijd</div>  
        <div class="card_date">15 maart 2020</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
        <div class="card_link">naar het artikel van het AD.nl</div> 
    </div>
    <div class="press_card">
        <div class="card_name">Amnesty organiseert eerste editie photwedstrijd</div>  
        <div class="card_date">15 maart 2020</div>
        <div class="card_description">Pietjes Puk is al 25 jaar beeldredacteur bij het NRC. Pietje heeft heel veel verstand van foto's. In 1530 was hij de eerste winnaar van de zilveren camera</div>
        <div class="card_link">naar het artikel van het AD.nl</div> 
    </div>
</div>
{{-- 
<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes 
            @include('inc.messages')
        </article>
        @guest
        @else
            @if (Auth::user()->admin)
                <article class="content_wrapper">
                    <a href="/press/create">Add new press article</a>
                </article>
            @endif
        @endguest
    </div>
    <div class="content_positioning cards_container center_content">
    @foreach($press as $pressArticle)
    <article class="content_wrapper flex_column card_wrapper">
        <section class="content_sub_wrapper card_sub_wrapper flex_wrap">
            <div class="flex_1 center_content">
                {{-- <div><img src="/img/logo/{{ $pressArticle->source }}" alt="{{ $pressArticle->source }}'s logo" /></div> 
                <div><img src="https://pbs.twimg.com/profile_images/931190512731807746/yO8Lcr9H_400x400.jpg" alt="{{ $pressArticle->source }}'s logo" /></div>
            </div>
            <div class="flex_2 flex_column center_content">
                <p class="h2 center_content">{{ $pressArticle->title }}</p>
                <div >{{ date('d-m-Y', strtotime($pressArticle->date)) }}</div>
                <div class="h3">{!! nl2br(e( $pressArticle->descr))!!}</div>
                <div><a href="{{ $pressArticle->link }}">View article</a></div>

            @guest
            @else
                @if (Auth::user()->admin)              
                    <div><a href="press/{{ $pressArticle->id }}">Show single article</a></div>
                @endif
            @endguest
            </div>
        </section>
        <section class="whitespace"></section>
    </article>
    @endforeach
    </div>
    <div class="content_positioning">
        <article class="content_wrapper flex_row">
            {{ $press->links() }}
        </article>
    </div>
</article> --}}
@endsection
