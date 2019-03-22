@extends('layouts.daisy')

@section('content')

<h1>photos.edit</h1>

<div class="form_container">
    <div class="header">Omschrijving aanpassen</div>
    
    <form class="form-insert" action="/photos/{{$photos->id}}" enctype="multipart/form-data" method="POST">
        @method('PATCH')
        @csrf
        <br /><input type="text" name="title" placeholder="title" value="{{ $photos->title }}">
        <br /><input type="text" name="descr" placeholder="descr" value="{{ $photos->descr }}">
        <br /><input type="text" name="focal" placeholder="focal" value="{{ $photos->focal }}">
        <br /><input type="text" name="aperture" placeholder="aperture" value="{{ $photos->aperture }}">
        <br /><input type="reset" name="reset">
        <br /><button type="submit">submit</button>
        <a href="/photos/{{$photos->id}}"> cancel </a>
    </form>
</div>
<img src="/storage/{{ $photos->src }}"/>
@endsection
