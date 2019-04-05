@extends('layouts.app')

@section('pagetitle', 'Join the contest!')

@section('content')
<a href="/photos"> return to gallery </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">upload een foto</p>
            </section>
            <section class="content_sub_wrapper">
            {{-- Success Handlers for User changes --}}
            @include('inc.messages')
                <form  class="form_wrapper form-insert" action="/photos" enctype="multipart/form-data" method="POST">
                    @csrf
                    <section>
                        <input type="file" name="src[]" placeholder="src" value="{{ old('src') }}" multiple>
                        hold the [ctrl] button down on your keyboard to upload multiple photos
                        <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
                        <input type="text" name="descr" placeholder="descr" value="{{ old('descr') }}">
                        <input type="text" name="focal" placeholder="focal" value="{{ old('focal') }}">
                        <input type="text" name="aperture" placeholder="aperture" value="{{ old('aperture') }}">
                    <hr />
                    </section>
                    <section>
                        <input class="button button_act" type="reset" name="reset">
                        <button style="flex: 1" class="button button_act" type="submit">submit</button>
                    </section>
                    <section>
                        <a href="/photos"> cancel </a>
                    </section>
                </form>
            </section>
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
        </article>
    </div>
</article>
@endsection