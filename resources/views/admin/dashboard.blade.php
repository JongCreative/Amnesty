@extends('layouts.app')

@section('content')
<div class="">
    <div class="">Admin Dashboard</div>

    <div class="">

        Welcome {{ Auth::user()->name }}
    </div>

    <div>
        <a href="/admin">change contest data</a>
    </div>
</div>
@endsection
