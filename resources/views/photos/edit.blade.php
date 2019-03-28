@extends('layouts.app')

@section('content')

<a href="/photos"> return to gallery </a>

<div class="form_container">
    <article>
        <section>
            <p class="header">Omschrijving aanpassen</p>
        </section>
        <section>
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
        <img src="/storage/{{ $photos->src }}"/>
    </article>
</div>

@endsection