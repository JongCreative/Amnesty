@extends('layouts.app')

@section('content')
<div class="">
    <div class="">{{ $user->banned ? 'Banned User' : $user->name }}</div>


    {{-- Success Handlers for User changes --}}
    @if (session('success')) 
        <div class="">
            {{ session('success') }}
        </div>
     @endif

    <div class="">
        {{ $user->email }}
    </div>

    @if ($user->jury)
        <div class="">
            Jury
        </div>
    @endif

    @if ($user->admin)
        <div class="">
            Admin
        </div>
    @endif

    <div class="">
        <div class="">About me</div>
        <div class=>{!! nl2br(e($user->descr )) !!}</div>
    </div>

    <a href="/users/{{$user->id}}/edit">Edit user</a>
    <a href="/users">Back</a>
</div>

@endsection
