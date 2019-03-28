@extends('layouts.app')

@section('content')

<div class="grid_jury">
    <div class="jury_card">
        @foreach($juryMembers as $juryMember)
            <a href="users/{{ $juryMember->id }}">
                <img src="{{url('/img/jury1.jpg')}}" alt="">
                <div class="name">{{ $juryMember->name }}</div>
                <div class="title">Donateur</div>
                <div class="description">{!! nl2br(e($juryMember->descr)) !!}</div>
            </a>
        @endforeach
    </div>
</div>

@endsection

