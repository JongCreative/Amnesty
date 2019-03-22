@extends('layouts.dev')

@section('content')

<div class="forms_container">
    <div class="form_container">
        <div class="header">New Sponsor</div>
        <form method="POST" action="/sponsors">
            @csrf

            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus>

            @if ($errors->has('contribution'))
                <div class="error">
                    {{ $errors->first('contribution') }}
                </div>
            @endif
            <label for="contribution">Contribution</label>
            <textarea name="contribution" placeholder="Contribution" maxlength="500">{{ old('contribution') }}</textarea>

            
            <input type="submit" value="Add Sponsor">
        </form>

    </div>
</div>

@endsection
