@extends('layouts.app')

@section('pagetitle', 'foto details')

@section('content')
<a href="/photos"> return to gallery </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">foto details</p>
            </section>
            <section class="content_sub_wrapper">
                <div>Title: {{ $photos->title }}</div>
                <div>Description: {{ $photos->descr }}</div>
                <div>Focal point: {{ $photos->focal }}</div>
                <div>Aperture: {{ $photos->aperture }}</div>
            </section>
        </article>
        @if(!Auth::guest())
        @if(Auth::user()->id == $photos->user_id)
            <article class="content_wrapper flex_row">
                <section class="content_sub_wrapper">
                    <a class="button button_act" href="/photos/{{$photos->id}}/edit">edit</a>
                </section>
                <section class="content_sub_wrapper">
                    <form class="form-insert" action="/photos/{{ $photos->id }}" method="POST">
                        @method('DELETE')            
                        @csrf
                        <button class="button button_act" type="submit" value="delete">delete</button>
                    </form>
                </section>
            </article>
        @endif
        @endif
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <img class="img_size"  src="/storage/{{ $photos->src }}" />
            </section>
        </article>
    </div>
</article>
@endsection