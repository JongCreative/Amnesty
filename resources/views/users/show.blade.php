@extends('layouts.app')

@section('content')
<div class="">
    <div class="">{{ $user->name }}</div>


    {{-- Success Handlers for Dashboard changes --}}
    @if (session('success')) 
        <div class="">
            {{ session('success') }}
        </div>
     @endif

    <div class="">
        {{ $user->email }}
    </div>

    <div class="">
        <div class="">About me</div>
        <div class=>{!! nl2br(e($user->descr )) !!}</div>
    </div>

    <a href="/users/{{$user->id}}/edit">Edit user</a>

</div>

@endsection
