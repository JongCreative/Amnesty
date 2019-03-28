@extends('layouts.app')

@section('pagetitle', 'All press articles')

@section('content')
<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper form_container">
            {{-- Success Handlers for User changes --}}
            @include('inc.messages')
        </article>
        @if (Auth::user()->admin)
        <article class="content_wrapper form_container">
            <a href="/press/create">Add new press article</a>
        </article>
        @endif
    </div>
    <div class="content_positioning flex_row">
    @foreach($press as $pressArticle)
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <p class="header">{{ $pressArticle->title }}</p>
            </section>
            <section class="content_sub_wrapper">
                <div>{{ $pressArticle->source }}</div>
                <div>{{ date('d-m-Y', strtotime($pressArticle->date)) }}</div>
                <div>{!! nl2br(e( $pressArticle->descr))!!}</div>
                <div><a href="https://{{ $pressArticle->link }}">View article</a></div>
            </section>
            @if (Auth::user()->admin)
                <section class="content_sub_wrapper">
                    <div><a href="press/{{ $pressArticle->id }}">Show single article</a></div>
                </section>
            @endif
        </article>
    @endforeach
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
</article>
{{ $press->links() }}
@endsection
