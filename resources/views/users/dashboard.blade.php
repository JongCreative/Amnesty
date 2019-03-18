@extends('layouts.app')

@section('content')
<div class="">
    <div class="">Dashboard</div>

    <div class="">
        Welcome {{ Auth::user()->name }}
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

@endsection
