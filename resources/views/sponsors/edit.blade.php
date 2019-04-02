@extends('layouts.app')

@section('pagetitle', 'Update Sponsor details')

@section('content')
<a href="/sponsors"> return to sponsors </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <p class="header">Edit Sponsor</p>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" enctype="multipart/form-data" method="POST" action="/sponsors/{{$sponsor->id}}">
                    @csrf
                    @method('PATCH')
                    <section>
                        <div>
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                            <label>Name<input id="name" type="text" name="name" value="{{ old('name') ? old('name') : $sponsor->name }}" autofocus></label>
                        </div>
                        <div>
                            <label>Title<input id="title" type="text" name="title" value="{{ old('title') ? old('title') : $sponsor->title }}"></label>
                        </div>
                        <div>   
                            @if ($errors->has('logo'))
                            <div class="error">
                                {{ $errors->first('logo') }}
                            </div>
                            @endif
                            <label>Update Logo:<input type="file" name="logo"></label>
                        </div>
                        <div>
                            @if ($errors->has('contribution'))
                            <div class="error">
                                {{ $errors->first('contribution') }}
                            </div>
                            @endif
                            <label>Contribution<textarea name="contribution" placeholder="Contribution" maxlength="500">{{ $sponsor->contribution }}</textarea></label>
                        </div>
                    <hr />
                    </section>
                    <section class="flex_row">
                        <input class="button button_act" type="submit" value="Update Sponsor">
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
