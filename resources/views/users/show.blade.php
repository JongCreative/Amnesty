@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
    <div class="form_container" style="max-width: 100%; min-width: 75%">
        <div class="header">{{ $user->banned ? 'Banned User' : $user->name }}</div>
        <div style="padding: 20px; background-color: #c7c2ba">

            {{-- Success Handlers for User changes --}}
            @if (session('success'))
            <div class="">
                {{ session('success') }}
            </div>
            @endif

            <div>{{ $user->title }}</div>
            <div>
                <img src="/img/avatar/{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" />
            </div>

            <div style="margin: 8px 0;">
                {{ $user->email }}
            </div>

            @if ($user->jury)
            <div style="margin: 8px 0;">
                Jury
            </div>
            @endif

            @if ($user->admin)
            <div style="margin: 8px 0;">
                Admin
            </div>
            @endif

            <div style="margin: 8px 0;">
                <div style="font-size: 1.2em; font-width: 700;">About me</div>
                <div class=>{!! nl2br(e($user->descr )) !!}</div>
            </div>

            <a href="/users/{{$user->id}}/edit">Edit user</a>
            <form method="POST" action="/users/{{ $user->id }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Ban user" style="background: red; color: white; max-width: 300px">
            </form>
            <a href="/users">Back</a>
        </div>

    </div>

</div>

@endsection
