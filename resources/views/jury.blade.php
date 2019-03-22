@extends('layouts.app')

@section('content')
<div class="">

    @foreach($juryMembers as $juryMember)
        <a href="users/{{ $juryMember->id }}">
            <div class="">{{ $juryMember->name }}</div>
            <div class="">{!! nl2br(e($juryMember->descr)) !!}</div>
        </a>
    @endforeach

</div>

@endsection