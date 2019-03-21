@extends('layouts.app')

@section('content')
<div class="">

    @foreach($sponsors as $sponsor)
        <a href="sponsors/{{ $sponsor->id }}">
            <div class="">{{ $sponsor->name }}</div>
            <div class="">{!! $sponsor->contribution !!}</div>
        </a>
    @endforeach

</div>

{{ $sponsors->links() }}

@endsection