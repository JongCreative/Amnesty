@extends('layouts.dev')

@section('content')
<div class="forms_container">
    <div class="form_container">
        <div class="header">Create new contest</div>
        <form method="POST" action="/admin/contest">
            @csrf

            <label for="warning">WARNING, THIS WILL START A NEW CONTEST AND ENDS THE CURRENT ONE. </label>

            <label for="region" class="">Region</label>

            <input id="region" type="text" class="" name="region" value="{{ $contestData->region }}" required autofocus>

            <label for="theme" class="">Theme</label>
            <input id="theme" type="text" class="" name="theme" value="{{ $contestData->theme }}" required>

            <label for="endDate" class="">End Date</label>
            <input id="endDate" type="date" class="" name="endDate" value="{{ $contestData->endDate }}" required>
            
            <input type="submit" value="Start new contest">
        </form>

    </div>
</div>

@endsection
