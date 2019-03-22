@extends('layouts.daisy')

@section('content')

<h1>photos.show</h1>
<p> individual photos</p>
<br/ > {{ $photos->id }}
<br/ > <img src="/storage/{{ $photos->src }}"/>
<br/ > {{ $photos->title }}
<br/ > {{ $photos->descr }}

@if(!Auth::guest())
    @if(Auth::user()->id == $photos->user_id)
        <button><a href="/photos/{{$photos->id}}/edit">edit</a></button>
        <form class="form-insert" action="/photos/{{ $photos->id }}" method="POST">
            @method('DELETE')            
            @csrf
            <button type="submit" value="delete">delete</button>
            <a href="/photos"> return to gallery </a>
        </form>
    @endif
@endif

@endsection