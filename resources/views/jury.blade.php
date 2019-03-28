@extends('layouts.app')

@section('content')
<div class="">

    @foreach($juryMembers as $juryMember)
        <a href="users/{{ $juryMember->id }}">
            <div class="">{{ $juryMember->name }}</div>
            <div class="">{!! nl2br(e($juryMember->descr)) !!}</div>
        </a>
    @endforeach
    <div class="grid_jury">
        <div class="jury_card">
            <img src="{{url('/img/jury1.jpg')}}" alt="">
            <div class="name">David Bowie</div>
            <div class="title">Donateur</div>
            <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
        </div>
        <div class="jury_card">
            <img src="{{url('/img/jury2.jpg')}}" alt="">
            <div class="name">David Bowie</div>
            <div class="title">Donateur</div>
            <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
        </div>
        <div class="jury_card">
            <img src="{{url('/img/jury3.jpg')}}" alt="">
            <div class="name">David Bowie</div>
            <div class="title">Donateur</div>
            <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
        </div>
        <div class="jury_card">
            <img src="{{url('/img/jury4.jpg')}}" alt="">
            <div class="name">David Bowie</div>
            <div class="title">Donateur</div>
            <div class="description">Daisy is student bij Code Gorilla en is daar een master in Laravel gebleken. Deze skills samen met haar talent voor structureren heeft zij voor dit project in gezet</div>
        </div>
    </div>

</div>

@endsection

