@extends('layouts.app')

@section('pagetitle', 'Sponsor details')

@section('content')

<article class="content_container">
    <div class="content_positioning">
        <article class="content_wrapper form_container">
            {{-- Success Handlers for User changes --}}
            @include('inc.messages')
        </article>
    </div>
    <div class="content_positioning">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">{{ $sponsor->name }}</p>
            </section>
            <section class="content_sub_wrapper">
                <br /> <img src="/img/logo/{{ $sponsor->logo }}" alt="{{ $sponsor->name }}'s logo" />
                <br /> {{ $sponsor->title }}
                <br /> {!! nl2br(e($sponsor->contribution)) !!}
            </section>
        </article>
        <article class="content_wrapper form_container flex_row">
            @if (Auth::user()->admin)
            <section class="content_sub_wrapper">
                <a href="/sponsors/{{ $sponsor->id }}/edit">Edit sponsor</a>
            </section>
            <section class="content_sub_wrapper">
                <form method="POST" action="/sponsors/{{$sponsor->id}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE SPONSOR">
                </form>
            </section>
            @endif
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
</article>
@endsection