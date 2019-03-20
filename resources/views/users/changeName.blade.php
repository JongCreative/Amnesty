@extends('layouts.app')

@section('content')
  <div class="card-header">REGISTER</div>
  
  <form method="POST" action="/dashboard/name">
    @csrf
    @method('PATCH')

    <label for="email" class=""> {{ Auth::user()->name }} </label>

    <label for="first_name" class="">First name</label>
    <input id="first_name" type="text" class="" name="first_name" value="{{ Auth::user()->first_name }}" required autofocus>

    @if ($errors->has('first_name'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('first_name') }}</strong>
      </span>
    @endif


    <label for="last_name" class="">Last name</label>
    <input id="last_name" type="text" class="" name="last_name" value="{{ Auth::user()->last_name }}" required>

    @if ($errors->has('last_name'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('last_name') }}</strong>
      </span>
    @endif

    <label for="currentPassword" class=""> Password </label>

    <input id="currentPassword" type="password" class="" name="currentPassword" required>

    @if (session('error')) 
        <div class="">
            {{ session('error') }}
        </div>
     @endif


    <button type="submit" class="">Change name</button>
    <a href="/dashboard" class="button?"> Back </a>
  </form>
@endsection
