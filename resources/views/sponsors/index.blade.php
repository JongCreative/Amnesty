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
     		<a href="/sponsors/create">Add new Sponsor</a>
     @endif

    {{-- Show all sponsors --}}
    @foreach($sponsors as $sponsor)
        <a href="sponsors/{{ $sponsor->id }}">
            <div class="">{{ $sponsor->name }}</div>
            <div class="">{!! nl2br(e($sponsor->contribution)) !!}</div>
        </a>
    @endforeach

</div>

{{ $sponsors->links() }}

@endsection