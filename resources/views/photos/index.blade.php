@extends('layouts.daisy')

@section('content')

<h1>Gallery</h1>

<a href="/photos/create" class="button button_act"><span>ik doe mee</span></a>

<br /><p>

@foreach($photos as $photo)
    {{ $photo->title }}
    <a href="/photos/{{ $photo->id }}"><img src="/storage/{{ $photo->src }}" style="max-width:100%"/></a>
    <hr/>
@endforeach
</p>
{{ $photos->links() }}

@endsection