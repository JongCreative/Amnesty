@extends('layouts.dev')

@section('content')

<div class="forms_container">
    <div class="form_container">
        <div class="header">New Sponsor</div>
        <form method="POST" action="/sponsors">
            @csrf

            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

            <label for="contribution">Contribution</label>
            <textarea name="contribution" placeholder="Contribution" maxlength="500">{{ old('contribution') }}</textarea>

            
            <input type="submit" value="Add Sponsor">
        </form>

    </div>
</div>

@endsection
