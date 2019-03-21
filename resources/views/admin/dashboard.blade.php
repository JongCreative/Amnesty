@extends('layouts.app')

@section('content')
<div class="">
    <div class="">Admin Dashboard</div>

    <div class="">

        Welcome {{ Auth::user()->name }}
    </div>

    {{-- Success Handler --}}
    @if (session('success')) 
        <div class="">
            {{ session('success') }}
        </div>
     @endif

    {{-- Sponsors --}}
    <div>
        <div>
            <a href="/sponsors/create">Add new Sponsor</a>
        </div>
    </div>

    {{-- Contest Data --}}
    <div>
        <a href="/admin/contest/edit">change contest data</a>
    </div>
    <div>
        <a href="/admin/contest/create">Start new Contest</a>
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
