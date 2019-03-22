@extends('layouts.daisy')

@section('content')

<a href="/photos"> return to gallery </a>

<div class="form_container" style="display:flex; flex-direction: row;">
        <article style="display:flex; flex-direction: column; width: 700px">
            <section style="flex: 1;">




<div class="form_container" style="max-width:1000px">
    <div class="header">Omschrijving aanpassen</div>
    
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
</div>

</section>
</article>

<article>
    <img src="/storage/{{ $photos->src }}" style="width:100%"/>
</article>
</div>


@endsection
