@extends('layouts.app')

@section('pagetitle', 'Update Press Article')

@section('content')
<a href="/press"> return to press </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <p class="header">Edit Press Article</p>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" method="POST" action="/press/{{$press->id}}">
                    @csrf
                    @method('PATCH')
                    <section>
                        <div>
                            @if ($errors->has('title'))
                            <div class="error">
                                {{ $errors->first('title') }}
                            </div>
                            @endif
                            <label>Title <input id="title" type="text" name="title" value="{{ old('title') ? old('title') : $press->title }} " autofocus></label>
                        </div>
                        <div>
                            @if ($errors->has('src'))
                            <div class="error">
                                {{ $errors->first('src') }}
                            </div>
                            @endif
                            <label>Source Name<input id="src" type="text" name="src" value="{{ old('src') ? old('src') : $press->source }}"></label>
                        </div>
                        <div>
                            @if ($errors->has('link'))
                            <div class="error">
                                {{ $errors->first('link') }}
                            </div>
                            @endif
                            <label>Link to article<input id="link" type="text" name="link" value="{{ old('link') ? old('link') : $press->link }}"></label>
                        </div>
                        <div>
                            @if ($errors->has('date'))
                            <div class="error">
                                {{ $errors->first('date') }}
                            </div>
                            @endif
                            <label>Publish Date<input id="date" type="date" name="date" value="{{ old('date') ? old('date') : $press->date }}"></label>
                        </div>
                        <div>
                            <label>Description<textarea name="descr" placeholder="Description" maxlength="500">{{ $press->descr }}</textarea></label>
                        </div>
                    <hr />
                    </section>
                    <section class="flex_row">
                        <input class="button button_act" type="submit">
                    </section>
                    <section>
                        <input type="reset" name="reset">
                        <a href="/press"> cancel </a>
                    </section>
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
