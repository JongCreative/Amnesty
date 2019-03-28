@extends('layouts.dev')

@section('content')
<div class="forms_container">
    <div class="form_container">
        <div class="header">Edit contest</div>
        <form method="POST" action="/admin/contest">
            @csrf
            {{ method_field('PATCH') }}
            <label for="id">Contest id: {{ $contestData->contest }}</label>

            <label for="region" class="">Region</label>

            <input id="region" type="text" class="" name="region" value="{{ $contestData->region }}" required autofocus>

            <label for="theme" class="">Theme</label>
            <input id="theme" type="text" class="" name="theme" value="{{ $contestData->theme }}" required>

            <label for="endDate">End Date</label>
            <input id="endDate" type="date" class="" name="endDate" value="{{ $contestData->endDate }}" required>

            <label for="mainPrize" class="">Main Prize</label>
            <input id="mainPrize" type="text" class="" name="mainPrize" value="{{ $contestData->mainPrize }}" required>
            <textarea name="mainDescr">{{ $contestData->mainDescr }}</textarea>

            <input type="submit" value="Edit Contest Data">
        </form>
    </div>
</div>

@endsection
