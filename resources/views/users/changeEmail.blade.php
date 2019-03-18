@extends('layouts.app')

@section('content')
  <div class="card-header">REGISTER</div>
  
  <form method="POST" action="/dashboard/email">
    @csrf
    @method('PATCH')

    <label for="email" class=""> Current email: {{ Auth::user()->email }} </label>
    <label for="email" class=""> email </label>
    <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
    @endif

    <label for="currentPassword" class=""> Password </label>

    <input id="currentPassword" type="password" class="" name="currentPassword" required>

    @if (session('error')) 
        <div class="">
            {{ session('error') }}
        </div>
     @endif


    <button type="submit" class="">Change email</button>
    <a href="/dashboard" class="button?"> Back </a>
  </form>
@endsection
