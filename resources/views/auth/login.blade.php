@extends('layouts.app')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Login</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if (session('message')) 
                <div class="">
                    {{ session('message') }}
                </div>
            @endif
            
            <label for="email" class="">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <label for="password" class="">{{ __('Password') }}</label>

            <input id="password" type="password" class="" name="password" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="" for="remember">
                {{ __('Remember Me') }}
            </label>

            <input type="submit" value="{{ __('Login') }}">

            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </form>
    </div>
</div>
@endsection
