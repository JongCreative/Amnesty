@extends('layouts.app')

@section('pagetitle', 'Dashboard')

@section('content')
<article class="content_container flex_column">
    <div class="content_positioning flex_row">
        <article class="content_wrapper flex_wrap">
            <section class="content_sub_wrapper">
                <p class="h1">About me</p>
            </section>
            <section class="content_sub_wrapper">
                <div >Welcome {{ Auth::user()->name }}<div>
                <div>{{ Auth::user()->title }}</div>
                <div><a href="/dashboard/name">Change name and title</a></div>
                @if ( Auth::user()->admin )
                <div><a href="/admin">Admin Dashboard</a></div>
                @endif
                <div><a href="/photos/create">Submit Photo</a></div>
                {{-- Success Handlers for User changes --}}
                @include('inc.messages')
                <div>{{ Auth::user()->email }}<a href="/dashboard/email" style="display: block;">Change email</a></div>
                <div><a href="/dashboard/password">Change Password</a></div>
            </section>
            <section class="content_sub_wrapper">
                <p class="h1">Who am i</p>
            </section>
            <section class="content_sub_wrapper">
                <div>my personal info{!! nl2br(e(Auth::user()->descr )) !!}</div>
                <div><a href="/dashboard/description">Edit</a></div>
            </section>
        </article>
        <article class="content_wrapper flex_column">
            <section class="content_sub_wrapper">
                <div><img class="img_size" src="/img/avatar/{{Auth::user()->avatar}}" alt="Avatar" /></div>
            </section>
            <section class="content_sub_wrapper">
                <form enctype="multipart/form-data" action="/dashboard/avatar" method="POST">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    @if ($errors->has('avatar'))
                    <label class='alert alert_error'>{{ $errors->first('avatar') }}</label>
                    @endif
                    <label>Update Avatar:</label>
                    <input type="file" name="avatar">
                    <input type="submit" class="button" value="Change Avatar" />
                </form>
            </section>
        </article>
    </div>
    <div class="content_positioning flex_column">
        <article class="content_wrapper flex_column">
            <section class="content_sub_wrapper">
                <p class="h1">Current contest details</p>
            </section>
            <section class="content_sub_wrapper">
                <div>Contest region: {{ $contestData->region  }}</div>
                <div>Contest theme: {{ $contestData->theme }}</div>
                <div>Contest end date: {{ $contestData->endDate }}</div>
                <div>Main prize: {{ $contestData->mainPrize }}</div>
                <div>{!! nl2br(e($contestData->mainDescr)) !!}</div>
            </section>
        </article>
    </div>
    <div class="content_positioning flex_column">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">My submissions</p>
            </section>
        </article>
        <article class="content_wrapper">
        @foreach ($photos as $photo)
            <section class="content_sub_wrapper">
                <div>Title: {{ $photo->title }}</div>
                <div>Description: {{ $photo->descr }}</div>
                <div>Focal point: {{ $photo->focal }}</div>
                <div>Aperture: {{ $photo->aperture }}</div>
            </section>
            <section class="content_sub_wrapper">
                <div><img class="img_size" src="/storage/{{ $photo->src }}" /></div>
            </section>
        </article>
        @endforeach
    </div>
</article>
@endsection
