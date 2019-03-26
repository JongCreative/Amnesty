@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
    <div class="form_container" style="max-width: 100%; min-width: 75%">
        <div class="header">Press</div>
        <div style="padding: 20px; background-color: #c7c2ba">

            {{-- Success Handler --}}
            @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
            @endif

            @if (Auth::user()->admin)
            <div>
                <a href="/press/create">Add new press article</a>
            </div>
            @endif

            {{-- Show all sponsors --}}
            @foreach($press as $pressArticle)
            <div style="display: inline-block; margin: 8px;">
                <div class="">{{ $pressArticle->title }}</div>
                <div class="">{{ $pressArticle->source }}</div>
                <div class="">{{ date('d-m-Y', strtotime($pressArticle->date)) }}</div>
                <div class="">{!! nl2br(e( $pressArticle->descr))!!}</div>
                <div class=""><a href="https://{{ $pressArticle->link }}">View article</a></div>

                @if (Auth::user()->admin)
                <a href="press/{{ $pressArticle->id }}">Show single article</a>
                @endif

            </div>
            @endforeach

            {{ $press->links() }}
        </div>
    </div>
</div>


@endsection
