@extends('layouts.app')

@section('pagetitle', 'User details')

@section('content')
{{-- Success Handlers for User changes --}}
@include('inc.messages')
<a href="/users"> return to users </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">{{ $user->banned ? 'Banned User' : $user->name }}</p>
            </section>
            <section class="content_sub_wrapper">
                <div>{{ $user->title }}</div>
                <div>{{ $user->email }}</div>
                @if ($user->jury)
                    <div>Jury</div>
                @endif
                @if ($user->admin)
                    <div>Admin</div>
                @endif
                <div>About me</div>
                <div class=>{!! nl2br(e($user->descr )) !!}</div>
            </section>
        </article>
        <article class="content_wrapper flex_row">
            <section class="content_sub_wrapper">
                <a class="button button_act" href="/users/{{$user->id}}/edit">Edit user</a>
            </section>
            <section class="content_sub_wrapper">
                <form class="form-insert" method="POST" action="/users/{{ $user->id }}">
                    @method('DELETE')            
                    @csrf
                    <input class="button btn_delete" type="submit" value="Ban user">
                </form>
            </section>
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <img src="/img/avatar/{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" />
            </section>
            <section class="content_sub_wrapper">
                <form action="/users/{{ $user->id }}/avatar" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="button" value="Delete Avatar" />
                </form>
            </section>
        </article>
    </div>
</article>
@endsection