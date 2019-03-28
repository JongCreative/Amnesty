@extends('layouts.app')

@section('content')

<a href="/photos"> return to gallery </a>

<div class="form_container" style="display:flex; flex-direction: row;">
    <article style="display:flex; flex-direction: column; width: 700px">
        <section style="flex: 1">
            <p class="header">Omschrijving aanpassen</p>
        </section>
        <section style="flex: 1">
            <form class="form-insert" action="/photos/{{$photos->id}}" enctype="multipart/form-data" method="POST">
                @method('PATCH')
                @csrf
                <br /><input type="text" name="title" placeholder="title" value="{{ $photos->title }}">
                <br /><input type="text" name="descr" placeholder="descr" value="{{ $photos->descr }}">
                <br /><input type="text" name="focal" placeholder="focal" value="{{ $photos->focal }}">
                <br /><input type="text" name="aperture" placeholder="aperture" value="{{ $photos->aperture }}">
                <br /><input type="reset" name="reset">
                <br /><button class="button button_act" type="submit">submit</button>
                <a href="/photos/{{$photos->id}}"> cancel </a>
            </form>
        </section>
    </article>
    <article>
        <img src="/storage/{{ $photos->src }}" style="width:100%"/>
    </article>
</div>

@endsection


@extends('layouts.app')

@section('pagetitle', 'edit upload details')

@section('content')
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">Omschrijving aanpassen</p>
            </section>
            <section class="content_sub_wrapper">
                <form class="form-insert" action="/photos/{{$photos->id}}" enctype="multipart/form-data" method="POST">
                    @method('PATCH')
                    @csrf
                    <section>
                        <br /><input type="text" name="title" placeholder="title" value="{{ $photos->title }}">
                        <br /><input type="text" name="descr" placeholder="descr" value="{{ $photos->descr }}">
                        <br /><input type="text" name="focal" placeholder="focal" value="{{ $photos->focal }}">
                        <br /><input type="text" name="aperture" placeholder="aperture" value="{{ $photos->aperture }}">
                    </section>
                    <section>
                        <br /><input type="reset" name="reset">
                        <br /><button class="button button_act" type="submit">submit</button>
                    </section>
                    <section>
                        <a href="/photos/{{$photos->id}}"> cancel </a>
                    </section>
                </form>
            </section>
        </article>
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper"></section>
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <img src="/storage/{{ $photos->src }}" style="width:100%"/>
            </section>
        </article>
    </div>
</article>
@endsection