@extends('layouts.app')

@section('content')
<div class="">
    <div class="">Admin Dashboard</div>

    <div class="">

        Welcome {{ Auth::user()->name }}
    </div>

    <div>
        <a href="/admin/contest/edit">change contest data</a>
    </div>

    <div>
        <div>
            Contest id: {{ $contestData->contest }}
        </div>
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

    <div>
        <a href="/users">List users</a>
    </div>
</div>

@endsection
