@extends('layouts.app')

@section('content')
  <div class="card-header">REGISTER</div>
  
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
    <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
    @endif

    <label for="password" class=""> Password </label>

    <input id="password" type="password" class="" name="password" required>

    @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
    @endif

    <label for="password-confirm" class="">Confirm Password</label>

    <input id="password-confirm" type="password" class="" name="password_confirmation" required>

    <button type="submit" class="">Register</button>
  </form>
@endsection
