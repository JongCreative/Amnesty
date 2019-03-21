@extends('layouts.dev')

@section('content')

<div class="forms_container">
    <div class="form_container">
        <div class="header">New Sponsor</div>
        <form method="POST" action="/sponsors/{{$sponsor->id}}">
            @csrf
            @method('PATCH')

            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ $sponsor->name }}" autofocus>

            @if ($errors->has('contribution'))
                <div class="error">
                    {{ $errors->first('contribution') }}
                </div>
            @endif
            <label for="contribution">Contribution</label>
            <textarea name="contribution" placeholder="Contribution" maxlength="500">{{ $sponsor->contribution }}</textarea>

            
            <input type="submit" value="Update Sponsor">
        </form>

    </div>
</div>

@endsection
