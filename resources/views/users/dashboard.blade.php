@extends('layouts.app')

@section('content')
<div class="">
    <div class="">Dashboard</div>

    <div class="">
        Welcome {{ Auth::user()->name }} <a href="/dashboard/name">Change</a>
    </div>

    <a href="/photos/create">Submit Photo</a>

    {{-- Success Handlers for Dashboard changes --}}
    @if (session('success')) 
        <div class="">
            {{ session('success') }}
        </div>
     @endif

    <div class="">
        {{ Auth::user()->email }}
        <a href="/dashboard/email">Change</a>
    </div>

    <div class="">
        <a href="/dashboard/password">Change Password</a>
    </div>

    <div class="">
        <div class="">About me</div>
        <div class=>{!! nl2br(e(Auth::user()->descr )) !!}</div>
        <a href="/dashboard/description">Edit</a>
    </div>

    <div>
        <h2>Current Contest</h2>
        <div>
            Contest region: {{ $contestData->region  }}
        </div>
        <div>
            Contest prize: {{ $contestData->prize  }}
        </div>
        <div>
            Contest theme: {{ $contestData->theme }}
        </div>
        <div>
            Contest end date: {{ $contestData->endDate }}
        </div>
    </div>
</div>

<br/><br/>
<h1>my submissions</h1>
<br/><br/>

@foreach ($photos as $photo)
    {{ $photo->title }}
    {{ $photo->descr }}
    {{ $photo->focal }}
    {{ $photo->aperture }}
    <img src="/storage/{{ $contestData->id }}/{{ $photo->src }}"/>
@endforeach

@endsection
