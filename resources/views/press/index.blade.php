@extends('layouts.app')

@section('content')
<div class="">

    {{-- Success Handler --}}
    @if (session('success')) 
        <div class="success">
            {{ session('success') }}
        </div>
     @endif

    @if (Auth::user()->admin)
        <a href="/press/create">Add new press article</a>
    @endif

    {{-- Show all sponsors --}}
    @foreach($press as $pressArticle)
        
        <div class="">{{ $pressArticle->title }}</div>
        <div class="">{{ $pressArticle->source }}</div>
        <div class="">{{ date('d-m-Y', strtotime($pressArticle->date)) }}</div>
        <div class=""><a href="https://{{ $pressArticle->link }}">View article</a></div>

        @if (Auth::user()->admin)
            <a href="press/{{ $pressArticle->id }}">Show single article</a>
        @endif

    @endforeach

</div>

{{ $press->links() }}

@endsection