@extends('layouts.app')

@section('pagetitle', 'Sponsoren')

@section('content')

            {{-- Success Handler --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Show all sponsors --}}
            @foreach($sponsors as $sponsor)
                <div>
                    <a href="sponsors/{{ $sponsor->id }}"></a>
                    {{ $sponsor->name }}
                    <img src="/img/logo/{{ $sponsor->logo }}" alt="{{ $sponsor->name }}'s logo" />
                    {{ $sponsor->title }} 
                    {!! nl2br(e($sponsor->contribution)) !!}
                </div>
            @endforeach

            {{ $sponsors->links() }}
<div class="grid_sponsors">
    <div class="sponsor_card">
        <img src="{{url('/img/devlucht.jpg')}}" alt="">
        <div class="name">Daisy Jong</div>
        <div class="title">Backend, scrummaster</div>
        <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/devlucht.jpg')}}" alt="">
        <div class="name">Daisy Jong</div>
        <div class="title">Backend, scrummaster</div>
        <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/devlucht.jpg')}}" alt="">
        <div class="name">Daisy Jong</div>
        <div class="title">Backend, scrummaster</div>
        <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/devlucht.jpg')}}" alt="">
        <div class="name">Daisy Jong</div>
        <div class="title">Backend, scrummaster</div>
        <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/devlucht.jpg')}}" alt="">
        <div class="name">Daisy Jong</div>
        <div class="title">Backend, scrummaster</div>
        <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
    </div>
    <div class="sponsor_card">
        <img src="{{url('/img/devlucht.jpg')}}" alt="">
        <div class="name">Daisy Jong</div>
        <div class="title">Backend, scrummaster</div>
        <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
    </div>
</div>
@endsection

{{-- @extends('layouts.app')

@section('pagetitle', 'Join the contest!')

@section('content')
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper"></section>
            <section class="content_sub_wrapper"></section>
        </article>
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper"></section>
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
</article>
@endsection --}}