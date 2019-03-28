@extends('layouts.app')

@section('pagetitle', 'Add new sponsor')

@section('content')
<a href="/sponsors"> return to sponsors </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">New Sponsor</p>
            </section>
            <section class="content_sub_wrapper">
                <form  class="form_wrapper form-insert" enctype="multipart/form-data" method="POST" action="/sponsors">
                    @csrf
                    <section>
                        <div>
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                            <label>Name<input id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" autofocus></label>
                        </div>
                        <div>
                            <label>Title<input id="title" type="text" name="title" value="{{ old('title') }}"></label>
                        </div>
                        <div>
                            <label>Logo:<input type="file" name="logo"></label>
                        </div>
                        <div>
                            @if ($errors->has('contribution'))
                            <div class="error">
                                {{ $errors->first('contribution') }}
                            </div>
                            @endif
                            <label>Contribution<textarea name="contribution" placeholder="Contribution" maxlength="500">{{ old('contribution') }}</textarea></label>
                        </div>
                        <hr />
                    </section>
                    <section class="flex_row">
                        <input class="button button_act" type="submit" value="Add Sponsor">
                    </section>
                    <section>
                        <input type="reset" name="reset">
                        <a href="/sponsors"> cancel </a>
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
