@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">New Sponsor</div>
        <form method="POST" action="/sponsors">
            @csrf

            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="Name"value="{{ old('name') }}" autofocus>

            @if ($errors->has('contribution'))
                <div class="error">
                    {{ $errors->first('contribution') }}
                </div>
            @endif
            <label for="contribution" style="display: block;">Contribution</label>
            <textarea name="contribution" placeholder="Contribution" maxlength="500" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: block; border-radius: 4px; box-sizing: border-box; min-height: 100px; ">{{ old('contribution') }}</textarea>

            
            <input type="submit" value="Add Sponsor">
        </form>

    </div>
</div>

@endsection
