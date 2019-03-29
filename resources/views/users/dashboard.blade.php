@extends('layouts.dev')

@section('content')
<div>
    <div >
        <div class="header">Dashboard</div>
        <div>
            <div >
                Welcome {{ Auth::user()->name }}

                <div>{{ Auth::user()->title }}</div>
                <a href="/dashboard/name">Change name and title</a>
            </div>

            <div>
                <img src="/img/avatar/{{Auth::user()->avatar}}" alt="Avatar" />
            </div>
            <form enctype="multipart/form-data" action="/dashboard/avatar" method="POST">

                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                @if ($errors->has('avatar'))
                <label class='alert alert_error'>{{ $errors->first('avatar') }}</label>
                @endif
                <label>Update Avatar:</label>
                <input type="file" name="avatar">
                <input type="submit" class="button" value="Change Avatar" />
            </form>


            @if ( Auth::user()->admin )
            <div>
                <a href="/admin">Admin Dashboard</a>
            </div>
            @endif
            <a href="/photos/create">Submit Photo</a>

            {{-- Success Handlers for Dashboard changes --}}
            @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
            @endif

            <div>
                {{ Auth::user()->email }}
                <a href="/dashboard/email" style="display: block;">Change email</a>
            </div>

            <div>
                <a href="/dashboard/password">Change Password</a>
            </div>

            <div>
                <div>About me</div>
                <div>{!! nl2br(e(Auth::user()->descr )) !!}</div>
                <a href="/dashboard/description">Edit</a>
            </div>

            <div>
                <h2>Current Contest</h2>
                <div>
                    Contest region: {{ $contestData->region  }}
                </div>
                <div>
                    Contest theme: {{ $contestData->theme }}
                </div>
                <div>
                    Contest end date: {{ $contestData->endDate }}
                </div>
                <div>
                    Main prize: {{ $contestData->mainPrize }}
                    <div>
                        {!! nl2br(e($contestData->mainDescr)) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="header">My submissions</div>
        <div>
            @foreach ($photos as $photo)
            {{ $photo->title }}
            {{ $photo->descr }}
            {{ $photo->focal }}
            {{ $photo->aperture }}
            <img src="/storage/{{ $photo->src }}" />
            @endforeach
        </div>

    </div>
</div>

@endsection
