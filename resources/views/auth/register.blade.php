@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Edit Sponsor</div>
  
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="first_name" class="">First name</label>

            <input id="first_name" type="text" class="" name="first_name" value="{{ old('first_name') }}" required autofocus>

            @if ($errors->has('first_name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('first_name') }}</strong>
              </span>
            @endif


            <label for="last_name" class="">Last name</label>
            <input id="last_name" type="text" class="" name="last_name" value="{{ old('last_name') }}" required>

            @if ($errors->has('last_name'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('last_name') }}</strong>
              </span>
            @endif

            <label for="email" class=""> email </label>
            <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif

            <label for="password" class=""> Password </label>

            <input id="password" type="password" class="" name="password" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif

            <label for="password-confirm" class="">Confirm Password</label>

            <input id="password-confirm" type="password" class="" name="password_confirmation" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            <input type="radio" name="terms" value="check" required>
            <label>I agree with the terms of the contest.</label> <br />

            <input type="checkbox" name="newsletter">
            <label>I want to register for the newsletter.</label>

            <input type="submit" value="register">
        </form>
    </div>
</div>
@endsection
