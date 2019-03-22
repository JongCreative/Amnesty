@extends('layouts.app')

@section('content')
<div class="">

    @foreach($users as $user)
        <a href="users/{{ $user->id }}">
            <div class="">{{ $user->name }}</div>
            <div class="">{{ $user->email }}</div>
        </a>
    @endforeach

</div>

{{ $users->links() }}
@endsection
