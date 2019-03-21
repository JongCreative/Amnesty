@extends('layouts.app')

@section('content')
<div class="">

    {{-- Success Handler --}}
    @if (session('success')) 
        <div class="success">
            {{ session('success') }}
        </div>
     @endif

    {{-- Show all sponsors --}}
    @foreach($sponsors as $sponsor)
        <a href="sponsors/{{ $sponsor->id }}">
            <div class="">{{ $sponsor->name }}</div>
            <div class="">{!! $sponsor->contribution !!}</div>
        </a>
    @endforeach

</div>

{{ $sponsors->links() }}

@endsection