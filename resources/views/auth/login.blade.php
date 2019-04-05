@extends('layouts.app')

@section('content')

<article class="content_container">
    <div class="form_container">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">Login</p>
            </section>
            <section class="content_sub_wrapper">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    @if (session('message'))
                        <div class="">
                            {{ session('message') }}
                        </div>
                    @endif

                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <label for="password" class="">{{ __('Password') }}</label>

                    <input id="password" type="password" class="" name="password" required>

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
            </section>
        </article>
    </div>
</article>
@endsection
