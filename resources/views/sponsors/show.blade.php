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
    <div class="">{!! $sponsor->contribution !!}</div>

    <a href="/sponsors/{{ $sponsor->id }}/edit">Edit sponsor</a>
</div>

@endsection