@extends('layouts.app')

@section('content')
<div class="">
		<a href="/press">Back</a>

    {{-- Success Handler --}}
    @if (session('success')) 
        <div class="success">
            {{ session('success') }}
        </div>
     @endif

    <div class="">{{ $press->title }}</div>
    <div class="">{{ $press->source }}</div>
    <div class="">{{ date('d-m-Y', strtotime($press->date)) }}</div>
    <div class="">https://{{ $press->link }}</div>

    <a href="/press/{{ $press->id }}/edit">Edit press article</a>

    <form method="POST" action="/press/{{$press->id}}">
        @csrf
        @method('DELETE')
      	<input type="submit" value="DELETE">
    </form>
    
</div>

@endsection