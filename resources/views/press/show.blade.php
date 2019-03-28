@extends('layouts.app')

@section('pagetitle', {{ $press->title }})

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
                <p class="header">{{ $pressArticle->title }}</p>
            </section>
            <section class="content_sub_wrapper">
                <br /> {{ $press->source }}
                <br /> {{ date('d-m-Y', strtotime($press->date)) }}
                <br /> {!! nl2br(e( $press->descr))!!}
                <br /> https://{{ $press->link }}
            </section>
        </article>
        <article class="content_wrapper form_container flex_row">
            <section class="content_sub_wrapper">
                <a href="/press/{{ $press->id }}/edit">Edit press article</a>>
            </section>
            <section class="content_sub_wrapper">
                <form method="POST" action="/press/{{$press->id}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE PRESS ARTICLE">
                </form>
            </section>
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
</article>
@endsection