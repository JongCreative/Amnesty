@extends('layouts.app')

@section('pagetitle', 'Omschrijving aanpassen')

@section('content')
<a href="/photos"> return to gallery </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">Omschrijving aanpassen</p>
            </section>
            <section class="content_sub_wrapper">
                <form  class="form_wrapper form-insert" action="/photos/{{$photos->id}}" enctype="multipart/form-data" method="POST">
                    @method('PATCH')
                    @csrf
                    <section>
                        <br /><input type="text" name="title" placeholder="title" value="{{ $photos->title }}">
                        <br /><input type="text" name="descr" placeholder="descr" value="{{ $photos->descr }}">
                        <br /><input type="text" name="focal" placeholder="focal" value="{{ $photos->focal }}">
                        <br /><input type="text" name="aperture" placeholder="aperture" value="{{ $photos->aperture }}">
                    </section>
                    <section>
                        <button class="button button_act" type="submit">submit</button>
                    </section>
                    <section class="flex_row">
                        <input type="reset" name="reset">
                        <a href="/photos"> cancel </a>
                    </section>
                </form>
            </section>
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <img src="/storage/{{ $photos->src }}"/>
            </section>
        </article>
    </div>
</article>
@endsection