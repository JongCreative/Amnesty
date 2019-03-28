@extends('layouts.dev')

@section('content')
<div class="forms_container">
    <div class="form_container">
        <div class="header">Press</div>
        <div>

            {{-- Success Handler --}}
            {{-- @if (session('success')) --}}
            <div class="success">
                {{ session('success') }}
            </div>
            {{-- @endif --}}

            {{-- @if (Auth::user()->admin) --}}
            <div>
                <a href="/press/create">Add new press article</a>
            </div>
            {{-- @endif --}}

            {{-- Show all sponsors --}}
            @foreach($press as $pressArticle)
            <div>
                {{ $pressArticle->title }}
                {{ $pressArticle->source }}
                {{ date('d-m-Y', strtotime($pressArticle->date)) }}
                {!! nl2br(e( $pressArticle->descr))!!}
                <a href="https://{{ $pressArticle->link }}">View article</a>
            </div>

                {{-- @if (Auth::user()->admin) --}}
                    <a href="press/{{ $pressArticle->id }}">Show single article</a>
                {{-- @endif --}}


            @endforeach

            {{ $press->links() }}


@endsection
