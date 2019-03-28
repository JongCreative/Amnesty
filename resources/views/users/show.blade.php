@extends('layouts.dev')

@section('content')
<div>
    <div>
        <div class="header">{{ $user->banned ? 'Banned User' : $user->name }}</div>
        <div>

            {{-- Success Handlers for User changes --}}
            @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
            @endif

            <div>{{ $user->title }}</div>
            <div>
                <img src="/img/avatar/{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" />
            </div>
            <form action="/users/{{ $user->id }}/avatar" method="POST">

                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <input type="submit" class="button" value="Delete Avatar" />
            </form>

            <div>
                {{ $user->email }}
            </div>

            @if ($user->jury)
            <div>
                Jury
            </div>
            @endif

            @if ($user->admin)
            <div>
                Admin
            </div>
            @endif

            <div>
                <div>About me</div>
                <div class=>{!! nl2br(e($user->descr )) !!}</div>
            </div>

            <a href="/users/{{$user->id}}/edit">Edit user</a>
            <form method="POST" action="/users/{{ $user->id }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Ban user">
            </form>
            <a href="/users">Back</a>
        </div>

    </div>

</div>

@endsection
