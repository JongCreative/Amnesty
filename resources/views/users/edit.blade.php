@extends('layouts.app')

@section('pagetitle', 'Update user details')

@section('content')
<a href="/users/{{ $user->id }}"> return to user details page </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <div class="h1">Edit {{ $user->name }}</div>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" enctype="multipart/form-data" method="POST" action="/users/{{ $user->id }}">
                    @csrf
                    @method('PATCH')
                    <section>
                        <div>
                            <label>Title<input id="title" type="text" name="title" value="{{ old('title') ? old('title') : $user->title }}"></label>
                        </div>
                        @if ($errors->has('avatar'))
                        <div class="error">
                            {{ $errors->first('avatar') }}
                        </div>
                        @endif
                        <div><label>Update Avatar:<input type="file" name="avatar"></label></div>
                        <div><label> About {{ $user->name }}<textarea name="descr" placeholder="Description" maxlength="500">{{ $user->descr }}</textarea></label>                            </div>
                        <div>
                            <label> Ranks<input type="checkbox" name="jury" {{ $user->jury ? ' checked="checked" ' : '' }}></label>
                            <label> Jury<input type="checkbox" name="admin" {{ $user->admin ? ' checked="checked" ' : '' }}></label>
                            <label> Admin<input type="checkbox" name="banned" {{ $user->banned ? ' checked="checked" ' : '' }}></label>
                            <label> Banned</label>
                        </div>
                        <hr />
                    </section>
                    <section class="flex_row">
                        <input class="button button_act" type="submit" value="Update {{$user->name}}">
                    </section>
                    <section>
                        <input type="reset" name="reset">
                        <a href="/users/{{ $user->id }}"> cancel </a>
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
