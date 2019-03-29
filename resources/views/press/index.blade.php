@extends('layouts.app')

@section('pagetitle', 'All press articles')

@section('content')
<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes --}}
            @include('inc.messages')
        </article>
        @if (Auth::user()->admin)
        <article class="content_wrapper">
            <a href="/press/create">Add new press article</a>
        </article>
        @endif
    </div>
    <div class="content_positioning cards_container">
    @foreach($press as $pressArticle)
        <article class="content_wrapper flex_column card_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">{{ $pressArticle->title }}</p>
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
    </div>
    <div class="content_positioning">
        <article class="content_wrapper flex_row">
            {{ $press->links() }}
        </article>
    </div>
</article>
@endsection
