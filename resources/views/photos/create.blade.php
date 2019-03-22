@extends('layouts.daisy')

@section('content')

<a href="/photos"> return to gallery </a>

<div class="form_container" style="display:flex; flex-direction: row;">
    <article style="display:flex; flex-direction: column; width: 700px">
        <section style="flex: 1">
            <p class="header">upload een foto</p>
        </section>
        <section style="flex: 1">
            <form  class="form-insert" action="/photos" enctype="multipart/form-data" method="POST">
                @csrf
                <section style="flex: 1">
                    <input type="file" name="src[]" placeholder="src" value="{{ old('src') }}" multiple>
                    hold the [ctrl] button down on your keyboard to upload multiple photos
                    <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
                    <input type="text" name="descr" placeholder="descr" value="{{ old('descr') }}">
                    <input type="text" name="focal" placeholder="focal" value="{{ old('focal') }}">
                    <input type="text" name="aperture" placeholder="aperture" value="{{ old('aperture') }}">
                <hr />
                </section>
                <section style="flex: 1; display:flex; flex-direction: row;">
                    <input style="flex: 1" class="button button_act" type="reset" name="reset">
                    <button style="flex: 1" class="button button_act" type="submit">submit</button>
                    <a style="flex: 1" href="/photos"> cancel </a>
                </section>
            </form>
        </section>
    </article>
</div>

@endsection
