@extends('layouts.app')

@section('pagetitle', 'Add a press article!')

@section('content')
<a href="/photos"> return to gallery </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">upload</p>
            </section>
            <section class="content_sub_wrapper">
                <form  class="form_wrapper form-insert" action="/photos" enctype="multipart/form-data" method="POST">
                    @csrf
                    <section>
                        <div>
                            @if ($errors->has('title'))
                            <div class="error">
                                {{ $errors->first('title') }}
                            </div>
                            @endif
                            <label>Title<input id="title" type="text" name="title" value="{{ old('title') }}" autofocus></label>
                        </div>
                        <div>
                            @if ($errors->has('src'))
                            <div class="error">
                                {{ $errors->first('src') }}
                            </div>
                            @endif
                            <label>Source Name<input id="src" type="text" name="src" value="{{ old('src') }}"></label>
                        </div>
                        <div>
                            @if ($errors->has('link'))
                            <div class="error">
                                {{ $errors->first('link') }}
                            </div>
                            @endif
                            <label>Link to article<input id="link" type="text" name="link" value="{{ old('link')  }}"></label>
                        </div>
                        <div>
                            @if ($errors->has('date'))
                            <div class="error">
                                {{ $errors->first('date') }}
                            </div>
                            @endif
                            <label>Publish Date<input id="date" type="date" name="date" value="{{ old('date') ? old('date') : date('Y-m-d') }}"></label>
                        </div>
                        <div>
                            <br />
                            <label>Description<textarea name="descr" placeholder="Description" maxlength="500">{{ old('descr') }}</textarea></label>
                        </div>
                        <div>
                            .
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
