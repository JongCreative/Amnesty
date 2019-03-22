@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Change email</div>  
        <form method="POST" action="/dashboard/email">
            @csrf
            @method('PATCH')

            <label for="email" style="display: block; font-size: 1.2em; font-weight: 700; margin-bottom: 8px;"> Current email: {{ Auth::user()->email }} </label>
            <label for="email"> email </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif

            <label for="currentPassword"> Password </label>

            <input id="currentPassword" type="password" name="currentPassword" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            @if (session('error')) 
                <div class="">
                    {{ session('error') }}
                </div>
             @endif


            <input type="submit" value="Change email">

            <a href="/dashboard" class="button?"> Back </a>
        </form>
    </div>
</div>
@endsection
