@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
    <div class="form_container" style="max-width: 100%; min-width: 75%">
        <div class="header">Dashboard</div>
        <div style="padding: 20px; background-color: #c7c2ba">
            <div style="margin: 8px 0;">
                Welcome {{ Auth::user()->name }} <a href="/dashboard/name" style="display: block;">Change name</a>
            </div>

            @if ( Auth::user()->admin )
                <div style="margin: 8px 0;">
                    <a href="/admin">Admin Dashboard</a>
                </div>
            @endif
            <a href="/photos/create">Submit Photo</a>

            {{-- Success Handlers for Dashboard changes --}}
            @if (session('success')) 
                <div style="margin: 8px 0;">
                    {{ session('success') }}
                </div>
             @endif

            <div style="margin: 8px 0;">
                {{ Auth::user()->email }}
                <a href="/dashboard/email" style="display: block;">Change email</a>
            </div>

            <div style="margin: 8px 0;">
                <a href="/dashboard/password">Change Password</a>
            </div>

            <div style="margin: 8px 0;">
                <div class="">About me</div>
                <div class=>{!! nl2br(e(Auth::user()->descr )) !!}</div>
                <a href="/dashboard/description">Edit</a>
            </div>

            <div style="margin: 8px 0;">
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

        <div class="header">My submissions</div>
        <div style="padding: 20px; background-color: #c7c2ba">
            @foreach ($photos as $photo)
                {{ $photo->title }}
                {{ $photo->descr }}
                {{ $photo->focal }}
                {{ $photo->aperture }}
                <img src="/storage/{{ $photo->src }}" style="width:100%"/>
            @endforeach
        </div>

    </div>
</div>

@endsection
