@extends('layouts.dev')

@section('content')

<div class="header">{{ $press->title }}</div>


{{-- Success Handlers for User changes --}}
@if (session('success'))
<div class="">
    {{ session('success') }}
</div>
@endif

<div class="">{{ $press->source }}</div>
<div class="">{{ date('d-m-Y', strtotime($press->date)) }}</div>
<div class="">{!! nl2br(e( $press->descr))!!}</div>
<div class="">https://{{ $press->link }}</div>


<a href="/press/{{ $press->id }}/edit">Edit press article</a>

<form method="POST" action="/press/{{$press->id}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="DELETE PRESS ARTICLE">
</form>
        

@endsection
