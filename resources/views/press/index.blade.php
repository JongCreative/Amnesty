@extends('layouts.app')

@section('content')
<div class="">

    {{-- Success Handler --}}
    @if (session('success')) 
        <div class="success">
            {{ session('success') }}
        </div>
     @endif

    <a href="/press/create">Add new press article</a>

    {{-- Show all sponsors --}}
    @foreach($press as $pressArticle)
        
        <div class="">{{ $pressArticle->title }}</div>
        <div class="">{{ $pressArticle->src }}</div>
        <div class="">{{ date('d-m-Y', strtotime($pressArticle->date)) }}</div>
        <div class=""><a href="http://{{ $pressArticle->link }}">View article</a></div>
        
        <a href="press/{{ $pressArticle->id }}">Show single article</a>

    @endforeach

</div>

{{ $press->links() }}

@endsection