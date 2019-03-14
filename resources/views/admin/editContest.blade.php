@extends('layouts.app')

@section('content')
  <form method="POST" action="/admin/contest">
    @csrf
    <label for="first_name" class="">Contest id: {{ $contestData->contest }}</label>

    <label for="region" class="">Region</label>

    <input id="region" type="text" class="" name="region" value="{{ $contestData->region }}" required autofocus>

    <label for="prize" class="">Prize</label>
    <input id="prize " type="text" class="" name="prize" value="{{ $contestData->prize }}" required>

    <label for="theme" class="">Theme</label>
    <input id="theme" type="text" class="" name="theme" value="{{ $contestData->theme }}" required>

    <label for="endDate" class="">End Date</label>
    <input id="endDate" type="date" class="" name="endDate" value="{{ $contestData->endDate }}" required>

    <button type="submit" class="">Edit</button>
</form>

@endsection
