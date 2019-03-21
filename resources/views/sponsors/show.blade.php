@extends('layouts.app')

@section('content')
<div class="">
		<a href="/sponsors">Back</a>

    {{-- Success Handler --}}
    @if (session('success')) 
        <div class="success">
            {{ session('success') }}
        </div>
     @endif

    <div class="">{{ $sponsor->name }}</div>
    <div class="">{!! nl2br(e($sponsor->contribution)) !!}</div>

    @if (Auth::user()->admin)
        <a href="/sponsors/{{ $sponsor->id }}/edit">Edit sponsor</a>

        <form method="POST" action="/sponsors/{{$sponsor->id}}">
            @csrf
            @method('DELETE')
          	<input type="submit" value="DELETE">
        </form>
    @endif
    
</div>

@endsection