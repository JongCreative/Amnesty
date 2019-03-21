@extends('layouts.app')

@section('content')
  <form method="POST" action="/admin/contest">
    @csrf

    <label for="warning" class="">WARNING, THIS WILL START A NEW CONTEST AND ENDS THE CURRENT ONE. </label>

    <label for="region" class="">Region</label>

    <input id="region" type="text" class="" name="region" value="{{ $contestData->region }}" required autofocus>

    <label for="prize" class="">Prize</label>
    <input id="prize " type="text" class="" name="prize" value="{{ $contestData->prize }}" required>

    <label for="theme" class="">Theme</label>
    <input id="theme" type="text" class="" name="theme" value="{{ $contestData->theme }}" required>

    <label for="endDate" class="">End Date</label>
    <input id="endDate" type="date" class="" name="endDate" value="{{ $contestData->endDate }}" required>

    <label for="warning" class="">WARNING, THIS WILL START A NEW CONTEST AND ENDS THE CURRENT ONE. </label>
    
    <button type="submit" class="">Start new contest</button>
</form>

@endsection
