@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Edit contest</div>
        <form method="POST" action="/admin/contest">
            @csrf
            {{ method_field('PATCH') }}
            <label for="id" style="display: block; font-size: 1.2em; font-weight: 700; margin-bottom: 8px;">Contest id: {{ $contestData->contest }}</label>

            <label for="region" class="">Region</label>

            <input id="region" type="text" class="" name="region" value="{{ $contestData->region }}" required autofocus>

            <label for="theme" class="">Theme</label>
            <input id="theme" type="text" class="" name="theme" value="{{ $contestData->theme }}" required>

            <label for="endDate" style="display: block;">End Date</label>
            <input id="endDate" type="date" class="" name="endDate" value="{{ $contestData->endDate }}" required>

            <input type="submit" value="Edit Contest Data">
        </form>
    </div>
</div>

@endsection
