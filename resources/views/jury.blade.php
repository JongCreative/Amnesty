@extends('layouts.app')

@section('pagetitle', 'Jury')

@section('content')

<div class="grid_container">
        @foreach($juryMembers as $juryMember)
        <div class="jury_card">
            <a href="users/{{ $juryMember->id }}"><img class="cover" src="{{url('/img/avatar/default.png')}}" alt=""></a>
                <div class="card_name">{{ $juryMember->name }}</div>
                <div class="card_title">Beeldredacteur NRC Handelsblad</div>
                <div class="card_description">{!! nl2br(e($juryMember->descr)) !!}</div>
        </div>      
        @endforeach
</div>

<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            Success Handlers for User changes 
            @include('inc.messages')
        </article>
        <article class="content_wrapper">
            <a class="button button_act" href="/photos/create">join the contest</a>
        </article>
    </div>
    {{-- <div class="content_positioning cards_container">
    @foreach($juryMembers as $juryMember)
        <article class="content_wrapper flex_column card_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">{{ $juryMember->title }}</p>
            </section>
            <section class="content_sub_wrapper">
                <div><a href="/sponsors/{{ $juryMember->id }}"><img class="img_size" src="img/avatar/{{ $juryMember->avatar }}"/></a></div>
                <div class="description">{!! nl2br(e($juryMember->descr)) !!}</div>
                <div class="name">{{ $juryMember->name }}</div>
                <img src="{{url('/img/jury1.jpg')}}" alt=""> 
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

