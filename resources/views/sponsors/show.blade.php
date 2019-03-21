@extends('layouts.app')

@section('content')
<div class="">

    <div class="">{{ $sponsor->name }}</div>
    <div class="">{!! $sponsor->contribution !!}</div>


</div>

@endsection