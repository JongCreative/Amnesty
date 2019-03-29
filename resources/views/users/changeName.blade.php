@extends('layouts.app')

@section('pagetitle', 'Change name')

@section('content')
<a href="/dashboard"> return to dashboard </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <div class="h1">Change name</div>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" method="POST" action="/dashboard/name">
                    @csrf
                    @method('PATCH')
                    <section>
                        <label> {{ Auth::user()->name }} </label>
                    </section>
                    <section>
                        <div>
                            @if ($errors->has('first_name'))
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                            <label>First name<input id="first_name" type="text" class="" name="first_name" value="{{ Auth::user()->first_name }}" required autofocus></label>
                        </div>
                        <div>
                            @if ($errors->has('last_name'))
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                            @endif
                            <label>First name<input id="first_name" type="text" name="first_name" value="{{ Auth::user()->first_name }}" required autofocus></label>
                        </div>
                        <div><label>Title<input id="title" type="text" class="" name="title" value="{{ Auth::user()->title }}"></label></div>
                        <div><label> Password<input id="currentPassword" type="password" class="" name="currentPassword" required ></label></div>
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

