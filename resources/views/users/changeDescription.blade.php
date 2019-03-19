@extends('layouts.app')

@section('content')
  <div class="card-header">Change Description</div>
  
  <form method="POST" action="/dashboard/description">
    @csrf
    @method('PATCH')

    @if (session('error')) 
        <div class="">
            {{ session('error') }}
        </div>
     @endif
    
    <label for="descr" class=""> About me </label>
    <textarea name="descr" placeholder="Description" maxlength="500">{{ Auth::user()->descr }}</textarea>

    <label for="currentPassword" class=""> Password </label>

    <input id="currentPassword" type="password" class="" name="currentPassword" required>

    <button type="submit" class="">Update User</button>
    <a href="/dashboard" class="button?"> Back </a>
  </form>
@endsection
