@extends('layouts.app')

@section('content')

<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <div class="form_container">
            <article class="content_wrapper form_container">
                <section class="content_sub_wrapper">
                    <p class="header">Register</p>
                </section>
                <section class="content_sub_wrapper">

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

                        <input type="radio" name="terms" value="check" required>
                        <label>I agree with the terms of the contest.</label> <br />

                        <input type="checkbox" name="newsletter">
                        <label>I want to register for the newsletter.</label>

                        <input type="submit" value="register">
                    </form>

                </section>
            </article>
        </div>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
</article>

@endsection
