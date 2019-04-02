@extends('layouts.app')

@section('pagetitle', 'Press article details')

@section('content')
{{-- Success Handlers for User changes --}}
@include('inc.messages')
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper flex_column">
            <section class="content_sub_wrapper">
                <p class="h1">{{ $press->title }}</p>
            </section>
            <section class="content_sub_wrapper">
                <br /> {{ $press->source }}
                <br /> {{ date('d-m-Y', strtotime($press->date)) }}
                <br /> {!! nl2br(e( $press->descr))!!}
                <br /> https://{{ $press->link }}
            </section>
        </article>
        <article class="content_wrapper flex_row">
            <section class="content_sub_wrapper">
                <a class="button button_act" href="/press/{{ $press->id }}/edit">Edit press article</a>
            </section>
            <section class="content_sub_wrapper">
                <form method="POST" action="/press/{{$press->id}}">
                    @csrf
                    @method('DELETE')
                    <input class="button btn_delete" type="submit" value="DELETE ARTICLE">
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