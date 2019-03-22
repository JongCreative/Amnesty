@extends('layouts.daisy')

@section('content')

<h1>upload een foto</h1>

<div class="form_container" style="max-width:1000px; background:white">
    <div class="header">Deelnemen</div>
    <form  class="form-insert" action="/photos" enctype="multipart/form-data" method="POST">
        @csrf
        
        <input type="file" name="src[]" placeholder="src" value="{{ old('src') }}" multiple>
        hold the [ctrl] button down on your keyboard to upload multiple photos
        <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
        <input type="text" name="descr" placeholder="descr" value="{{ old('descr') }}">
        <input type="text" name="focal" placeholder="focal" value="{{ old('focal') }}">
        <input type="text" name="aperture" placeholder="aperture" value="{{ old('aperture') }}">

        <hr />
        <input class="button button_act" type="reset" name="reset">
        <input class="button button_act" type="submit">
        <a href="/photos"> cancel </a>
    </form>    
</div>
@endsection