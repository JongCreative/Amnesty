@extends('layouts.app')

@section('pagetitle', 'All press articles')

@section('content')
<article class="content_container">
    <div class="content_positioning">
        <article class="content_wrapper form_container">
            @if (session('success'))
            <section class="content_sub_wrapper">
                <article class="alert alert-success" style=" background-color:teal ; color:white">
                    {{session('success')}}
                </article>
            </section>
            @endif
            @if (Auth::user()->admin)
            <article class="content_wrapper form_container">
                <a href="/press/create">Add new press article</a>
            </article>
            @endif
        </article>
    </div>
    <div class="content_positioning">
    @foreach($press as $pressArticle)
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                {{ $pressArticle->title }}
                {{ $pressArticle->source }}
                {{ date('d-m-Y', strtotime($pressArticle->date)) }}
                {!! nl2br(e( $pressArticle->descr))!!}
                <a href="https://{{ $pressArticle->link }}">View article</a>
            </section>
            @if (Auth::user()->admin)
                <section class="content_sub_wrapper">
                    <a href="press/{{ $pressArticle->id }}">Show single article</a>
                </section>
            @endif
        </article>
    @endforeach
    </div>
</article>
{{ $press->links() }}
@endsection
